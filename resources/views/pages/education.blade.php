@extends('layouts.theme')

@section('content')
<div class="super_container">

    <!-- Header -->

    @include('partials/header')


    <div class="content_container">
        <div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

            <!-- General Information -->
        @include('partials/info')

        <!-- Main Content -->

            <div class="main_content">
                <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
                    <div class="main_subtitle">What I am good at</div>
                    <div class="main_title">My Education</div>
                </div>
                <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

                    <!-- Education -->

                    <div class="education">
                        <?php
                        $servername = "127.0.0.1";
                        $username = "root";
                        $password = "";
                        $dbname = "portfolio";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM education";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start">
                            <div><div class="edu_year"><?php echo $row['year']; ?></div></div>
                            <div><div class="edu_image"><img src="{{ url('i/'.$row['logo']) }}" alt=""></div></div>
                            <div class="edu_content">
                                <div class="edu_title_container">
                                    <div class="edu_title"><?php echo $row['name']; ?></div>
                                    <div class="edu_subtitle"><?php echo $row['kval']; ?></div>
                                </div>
                                <div class="edu_text">
                                    <p>L<?php echo $row['text']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                    <!-- Education Item -->



                    </div>

                </div>
            </div>
        </div>
        <div align='center'>
        </div>

    </div>
</div>
@stop
