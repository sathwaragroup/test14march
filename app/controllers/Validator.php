<?php

class Validator
{
    private $errors = [];

    public function validate($field, $value, $rules)
    {
        foreach ($rules as $rule) {
            if (strpos($rule, 'required') !== false) {
                $this->validateRequired($field, $value);
            } elseif (strpos($rule, 'min:') === 0) {
                $minLength = (int) str_replace('min:', '', $rule);
                $this->validateMinLength($field, $value, $minLength);
            } elseif (strpos($rule, 'max:') === 0) {
                $maxLength = (int) str_replace('max:', '', $rule);
                $this->validateMaxLength($field, $value, $maxLength);
            } elseif ($rule === 'numeric') {
                $this->validateNumeric($field, $value);
            } elseif ($rule === 'string') {
                $this->validateString($field, $value);
            } elseif ($rule === 'email') {
                $this->validateEmail($field, $value);
            } elseif (strpos($rule, 'regex:') === 0) {
                $pattern = str_replace('regex:', '', $rule);
                $this->validateRegex($field, $value, $pattern);
            }
        }
    }

    private function validateRequired($field, $value)
    {
        if (empty($value)) {
            $this->errors[$field][] = ucfirst($field) . " is required.";
        }
    }

    private function validateMinLength($field, $value, $minLength)
    {
        if (strlen($value) < $minLength) {
            $this->errors[$field][] = ucfirst($field) . " must be at least $minLength characters.";
        }
    }

    private function validateMaxLength($field, $value, $maxLength)
    {
        if (strlen($value) > $maxLength) {
            $this->errors[$field][] = ucfirst($field) . " must not exceed $maxLength characters.";
        }
    }

    private function validateNumeric($field, $value)
    {
        if (!is_numeric($value)) {
            $this->errors[$field][] = ucfirst($field) . " must be a number.";
        }
    }

    private function validateString($field, $value)
    {
        if (!is_string($value)) {
            $this->errors[$field][] = ucfirst($field) . " must be a string.";
        }
    }

    private function validateEmail($field, $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field][] = ucfirst($field) . " must be a valid email address.";
        }
    }

    private function validateRegex($field, $value, $pattern)
    {
        if (!preg_match($pattern, $value)) {
            $this->errors[$field][] = ucfirst($field) . " is invalid.";
        }
    }

    public function errors()
    {
        return $this->errors;
    }

    public function hasErrors()
    {
        return !empty($this->errors);
    }
}



?>