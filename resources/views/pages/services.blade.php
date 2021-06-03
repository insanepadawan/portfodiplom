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
                    <div class="main_subtitle"></div>
                    <div class="main_title">Менің қызметтерім</div>
                </div>
                <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

                    <!-- Services -->

                    <div class="services">
                        <div class="services_container d-flex flex-row flex-wrap align-items-start justify-content-start">
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

                            $sql = "SELECT * FROM services";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                            ?>
                            <div class="service">
                                <div class="service_title_container d-flex flex-row align-items-center justify-content-start">
                                    <div><div class="service_icon"><img src="images/<?php echo $row['logo']; ?>" alt=""></div></div>
                                    <div class="service_title"><?php echo $row['name']; ?></div>
                                </div>
                                <div class="service_text">
                                    <p><?php echo $row['text']; ?></p>
                                </div>
                            </div>
                        <?php
                        }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        ?>
                        <!-- Service -->


                        </div>

                        <!-- Quote Button -->
                        <div class="services_button"><a href="#">Ask for a Quote</a></div>

                    </div>

                </div>
            </div>
        </div>
        <div align='center'>
        </div>
    </div>
</div>
@stop
