<?php
if(!isset($_SESSION))
    session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">OceanApps</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home  </span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/oceanerp2/modules/office/dept.php">Departments </span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/oceanerp2/modules/office/student.php">Students  </span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/oceanerp2/logout.php">Logout  </span></a>
            </li>
        </ul>
        ,<?php 
        if( isset($_SESSION['username']))
        echo "<h5> Welcome,". $_SESSION['username']."</h5>";?>   
    </div>
</nav>
