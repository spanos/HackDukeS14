<!DOCTYPE html5>
<html>
        <head>
                <title>info</title>
                <link rel="stylesheet" type="text/css" href="style.css">
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                <script type="text/javascript" src="interact.js"></script>
                <meta name="authors" content="Nicole Busby, David Spanos, Kevin Valakuzhy">
        </head>
        <body>
                <div class="topborder">
                        <span class="green"></span>
                        <span class="purple"></span>
                        <span class="orange"></span>
                </div>
                
                <div id="page_wrapper">
        
                        <h1>Add New Event</h1>
                        
                        <form class="green" name="event" action="addEvent.php" method="post" class="shift">
                        Title: <input type="text" name="title"><br>
                        Date: <input type="date" name="date"><br>
                        Time: <input type="time" name="time"><br>
                        Place: <input type="text" name="place"><br>
                        Tags: <br>
                                <select name="tags[]" multiple="true" size="10">
                                  <option value="">Select...</option>
                                  <option value="women">Women</option>
                                  <option value="men">Men</option>
                                  <option value="children">Children</option>
                                  <option value="senior">Senior</option>
                                  <option value="rehab">Drug Recovery</option>
                                  <option value="food">Food</option>
                                  <option value="spiritual">Spiritual</option>
                                  <option value="single">Single</option>
                                  <option value="family">Family</option>
                                </select>
                        <input type="submit" value="Add New Event">
                        </form>
                        
                        <h1>Add New Resident</h1>
                        <form class="orange" name="resident" action="resident.php" method="post">
                        Name: <input type="text" name="name"><br>
                        Phone: <input type="text" name="phone"><br>
                        <input type ="submit" value="Add New Resident">
                        </form>
                 
                        <h1>Check In Bed</h1>
                        <form class="purple" name="bed2" action="bedReserve.php" method="post">
                        <input type="radio" name="BedID" value=1>1<br>
                        <input type="radio" name="BedID" value=2>2<br>
                        <input type="radio" name="BedID" value=3>3<br>
                        <input type="submit" value="Check In Bed">
                        </form> 
                   
                        <h1>Check Out Bed</h1>
                        <form class="purple" name="bed1" action="bedRelease.php" method="post">
                        <input type="radio" name="BedID" value=1>1<br>
                        <input type="radio" name="BedID" value=2>2<br>
                        <input type="radio" name="BedID" value=3>3<br>
                        <input type="submit" value="Check Out Bed">
                        </form> 
                </div>
        </body>
</html>