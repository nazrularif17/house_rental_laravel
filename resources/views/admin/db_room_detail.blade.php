@include('header')
<style>
    .index-head {
        margin: 3%;
        margin-bottom: 0%;
        font-size: x-large;
        display: flex;
    }
    h1 {
        text-transform: none;
        color: #FF8800;
    }
    hr {
        background-color: grey;
        width: 94%;
        height: 2px;
        margin-left: 3%;
    }
    .container {
        display: flex;
        height: 100%;
    }
    .sidebar{
        padding:5% ;
        padding-top: 7%;
    }
    .sidebar-list {
        list-style: none; 
    }
    .sidebar-list-item {
        border: 2px solid #FF8800;
        background-color: #815854;
        border-radius: 2rem;
        padding: 5px;
        padding-left: 10px;
        padding-right: 10px;
        margin-bottom: 10px;
        text-align: center;
    }
    .sidebar-list-item a {
        font-weight: 700;
        font-size: 30px;
        color: #F9EBDE;
    }
    .content {
        border: 3px solid #815854;
        display: flex;
        padding: 2%;
        margin-right: 4%;
        width: 100%;
        margin-top: 4%;
        background-color: #F9EBDE;
        border-radius: 1rem;
        overflow-y: auto;
        max-height: 410px;
        overflow-x: hidden; 
    }
    .content::-webkit-scrollbar {
        width: 12px;
    }   
    .content::-webkit-scrollbar-thumb {
        background-color: #F9EBDE;
        border-radius: 3rem;
        border: 3px solid #815854; 
    }   
    .content-image {
        margin-right: 10px;
        padding: 3px;
        background-color: #F9EBDE;
        max-height: 300px;
        border-radius: 2rem;
    }
    .image {
        max-height: 100%;
        border-radius: 2rem;
        border: 3px solid #FF8800
    }
    .content-list {
        list-style: none;
    }
    .content-list-item {
        background-color: #F9EBDE;
        border: solid #FF8800;
        margin: 0%;
        margin-bottom: 2%;
        padding-left: 2%;
        border-radius: 3rem;
        width: 680px;
    }
    .content-list-item h1{
        color: #815854;
    }
    .content-list-item :last-child {
        margin-bottom: 0%;
    }
</style>
<body>
    <div class="index-head">
        <h1 class="head-title">Room</h1>
    </div>
    <hr/>
    <div class="container">
        <div class="sidebar">
            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <a href="{{ route('students.index') }}">Student</a>
                </li>
                <li class="sidebar-list-item">
                    <a href="{{ route('bilik.index') }}">Room</a>
                </li>
                <li class="sidebar-list-item">
                    <a href="{{ route('owners.index') }}">Owner</a>
                </li>
                <li class="sidebar-list-item">
                    <a href="{{ route('rumah.index') }}">Property</a>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="content-image">
                <img class="image" src="{{ asset ('rooms/' . $bilik->roomImage) }}">
            </div>
            <ul class="content-list">
                <li class="content-list-item">
                    <h1>Room ID: {{ $bilik->id }}</h1>
                </li>
                <li class="content-list-item">
                    <h1>Student ID: {{ $bilik->id }}</h1>
                </li>
                <li class="content-list-item">
                    <h1>Room Title: {{ $bilik->roomTitle }}</h1>
                </li>
                <li class="content-list-item">
                    <h1>Room Type: {{ $bilik->roomType }}</h1>
                </li>
                <li class="content-list-item">
                    <h1>Room Price: {{ $bilik->roomPrice }}</h1>
                </li>
                <li class="content-list-item">
                    <h1>Room Address: {{ $bilik->roomAddress }}</h1>
                </li>
                <li class="content-list-item">
                    <h1>Room Furnishings: {{ $bilik->roomFurnishings }}</h1>
                </li>
                <li class="content-list-item">
                    <h1>Room Description: {{ $bilik->roomDesc }}</h1>
                </li>
                <li class="content-list-item">
                    <h1>Room Status: {{ $bilik->roomStatus }}</h1>
                </li>
            </ul>
        </div>
    </div>
</body>