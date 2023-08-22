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
        background-color: #F9EBDE;
        display: flex;
        padding: 2%;
        margin-right: 4%;
        width: 1100px;
        margin-top: 60px;
        border-radius: 3rem;
        height: 410px;
    }
    .content-list {
        list-style: none;
        width: 100%;
    }
    .content-list-item {
        background-color: #F9EBDE;
        border: solid #FF8800;
        margin: 0%;
        margin-bottom: 2%;
        padding: 10px;
        border-radius: 5rem
    }
    .content-list-item :last-child {
        margin-bottom: 0%;
    }
    input {
        font-size: 16px;
        font-weight: 500;
        background: transparent;
        width: 100%;
    }
    .submit-button {
        background-color: #FF8800;
        color: #F9EBDE;
        padding: 7px;
        width: 100px;
        border: 2px solid #F9EBDE;
        border-radius: 2rem;
    }
</style>
<body>
    <div class="index-head">
        <h1 class="head-title">Owner</h1>
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
        <form method="POST" action="{{ route('owners.update',$owner->id) }}">
            @csrf
            @method('PUT')
            <div class="content">
                <ul class="content-list">
                    <li class="content-list-item">
                        <input type="number" name="phoneNo" value="0{{ $owner->phoneNo }}" placeholder="Phone number">
                    </li>
                    <li class="content-list-item">
                        <input type="text" name="email" value="{{ $owner->email }}" placeholder="Email">
                    </li>
                    <input class="submit-button" type="submit" value="Update">
                </ul>
            </div>
        </form>
    </div>
</body>