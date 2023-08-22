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
        width: 1200px;
        margin-top: 4%;
        background-color: #F9EBDE;
        border-radius: 3rem;
        overflow-y: auto;
        max-height: 417px;
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
        border-radius: 5rem
    }
    .content-list-item :last-child {
        margin-bottom: 0%;
    }
    .content-list-item a {
        font-weight: 500;
        font-size: 25px;
        color: #815854;
    }
</style>
<body>
    <div class="index-head">
        <h1 class="head-title">Student</h1>
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
            <ul class="content-list">
                @foreach ($users as $user)
                    <li class="content-list-item">
                        <a href="{{ route('students.show',$user->id) }}">{{ $user->customID }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>