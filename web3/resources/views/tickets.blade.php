@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your tickets: </div>

                <div class="card-body">
                <table class= "table">
                <br>
                <?php
                    foreach($tickets as $ticket)
                    {
                        echo "Room: ",$ticket->room,". Date and Time of projection: ", $ticket->time, ". Ticket price: $", $ticket->price,". Movie name: ", $ticket->moviename, ". Seats left: ", $ticket->seatsleft;
                        echo "<br>";
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection