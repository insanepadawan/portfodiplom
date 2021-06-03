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
            <?php
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "portfolio";

            $name = $_POST['name'];
            $email = $_POST['email'];
            $text = $_POST['text'];
            $message = $_POST['message'];
            $date = date("y.m.d");
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO contact (name, email, message, text, date)
				VALUES ('$name', '$email', '$message', '$text', '$date')";
            ?>
            <div class="main_content">
                <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
                    <div class="main_subtitle"></div>
                    <div class="main_title"> <?php if ($conn->query($sql) === TRUE) {
                            echo "Сұрағыңыз енгізілді!";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        $conn->close();
                        ?>
                    </div>
                </div>
                <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

                    <!-- Contact -->
                </div>

            </div>
        </div>
        <div align='center'>

            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>

    </div>
</div>
@stop
