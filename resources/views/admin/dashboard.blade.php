@include ('header')
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
        padding: 2%;
        margin-right: 4%;
        width: 100%;
        margin-top: 4%;
        background-color: #F9EBDE;
        border-radius: 3rem;
        overflow-y: auto;
        max-height: 417px;
    }
    .content-list {
        list-style: none;
        background-color: #F9EBDE;
    }
</style>
<body>
    <div class="index-head">
        <h1 class="head-title">rumahStudent</h1>
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
        
        </div>
    </div>
</body>