
<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "batchjobsqa"; // replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Write SQL query
$sql = "SELECT * FROM faculty_attendance_report WHERE rf_id = 'RF1' ORDER by date";

// Execute query and get result
$result = $conn->query($sql);

// Initialize an empty array to store data
$data = array();

// Check if there are results
if ($result->num_rows > 0) {
    // Fetch all results as an associative array
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;  // Add each row to the data array
    }
} else {
    echo "No results found.";
}

// Return the data array


// Close connection
$conn->close();
?>










<!DOCTYPE html>
<html>
<head>
    <title>Punching Details</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
    <script type="text/javascript">

function getTimeDifference(in_time, out_time) {
    // Add a fixed date (1970-01-01) to the time string to parse it as a valid Date
    var start = new Date("1970-01-01 " + in_time);
    var end = new Date("1970-01-01 " + out_time);

    // If out_time is earlier than in_time, assume it's the next day
    if (end < start) {
        end.setDate(end.getDate() + 1);
    }

    // Calculate the difference in milliseconds
    var diff = end - start;

    // Convert milliseconds to hours in decimal
    var hours = diff / (1000 * 60 * 60);
    
    // Return the time difference as a decimal number (e.g., 10.35 hours)
    return hours.toFixed(2); // Round to 2 decimal places
}

function formatDate(dateString) {
    // Create a Date object from the provided date string
    var date = new Date(dateString);

    // Define month names array with short month names
    var months = [
        "Jan", "Feb", "Mar", "Apr", "May", "Jun",
        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];

    // Get the day, month, and year
    var day = date.getDate();            // Day without leading zero
    var month = months[date.getMonth()]; // Get the shortened month name
    var year = date.getFullYear();       // Get the year

    // Return the formatted date as "D Mon YYYY"
    return day + " " + month + " " + year;
}



var mydata = '<?php echo json_encode($data); ?>';
mydata = JSON.parse(mydata);



var setmax = 1;
var Ytital = "1 Jan To 12 Jan";
var Xtital = "Working Hours";
var user = "Ramesh";
var chartdata = [];






$.each(mydata, function (key, val) {

        var timeDiff = getTimeDifference(val.out_time,val.in_time);
        timeDiff = parseFloat(timeDiff);
        if (setmax-2  < timeDiff) {
            setmax = timeDiff+2;
        }
        var formattedDate = formatDate(val.date);
        chartdata.push([formattedDate, timeDiff]);
       
});

console.log(chartdata)
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', Ytital);
            data.addColumn('number', 'Working Hours');
            
            // Sample Data: Ramesh's working hours from Jan 1 to Jan 30
            data.addRows(chartdata);
            
            var options = {
                title: 'Punching Details - '+user,
                hAxis: {
                    title: Ytital,
                    slantedText: true,
                    slantedTextAngle: 45
                },
                vAxis: {
                    title: Xtital,
                    minValue: 0, maxValue: setmax
                },
                legend: { position: 'none' },
                colors: ['#4285F4'],
                chartArea: {width: '80%', height: '70%'}
            };
            
            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }



google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawChart2);

function drawChart2() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', Ytital);
    data.addColumn('number', 'Working Hours');
    
    // Sample Data: Ramesh's working hours from Jan 1 to Jan 30
    data.addRows(chartdata);
    
    var options = {
        title: 'Punching Details - ' + user,
        hAxis: {
            title: Ytital,
            slantedText: true,
            slantedTextAngle: 45
        },
        vAxis: {
            title: Xtital,
            minValue: 0, 
            maxValue: setmax
        },
        legend: { position: 'none' },
        colors: ['#4285F4'], // Set the line color
        chartArea: { width: '80%', height: '70%' },
        curveType: 'function', // Makes the line smooth (optional)
        pointSize: 5 // Size of the points on the line
    };
    
    var chart = new google.visualization.LineChart(document.getElementById('chart_div2'));
    chart.draw(data, options);
}

    </script>
</head>
<body>


    <h2 style="text-align:center">Punching Details</h2>
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 style="text-align:center">Punching Details</h2>
    <div id="chart_div2" style="width: 100%; height: 500px;"></div>
</body>
</html>
