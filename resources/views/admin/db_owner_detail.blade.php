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

    .sidebar {
        padding: 5%;
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

    .add-button {
        position: absolute;
        right: 8%;
        margin-top: 5px;
        font-size: 16px;
        background-color: #815854;
        padding: 5px;
        padding-left: 10px;
        padding-right: 10px;
        border: 1px solid #FF8800;
        border-radius: 3rem;
    }

    .add-button a {
        text-decoration: none;
        color: #F9EBDE;
        font-weight: 500;
    }

    .parent-content {
        margin-right: 4%;
    }

    .content {
        border: 3px solid #815854;
        display: flex;
        padding: 2%;
        margin-right: 4%;
        width: 1200px;
        margin-top: 4%;
        background-color: #F9EBDE;
        border-radius: 3rem;
        overflow-y: auto;
        max-height: 410px;
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
        padding-left: 2%;
        border-radius: 5rem
    }
    .content-list-item h1{
        color: #815854;
    }
    .content-list-item :last-child {
        margin-bottom: 0%;
    }

    .content-bottom {
        display: flex;
        margin-left: 80%;
    }
    .button {
        margin-top: 10px;
        font-size: 16px;
        background-color: #815854;
        padding: 5px;
        padding-left: 10px;
        padding-right: 10px;
        border: 1px solid #FF8800;
        border-radius: 3rem;
        margin: 5px;
    }
    .button a {
        text-decoration: none;
        color: #F9EBDE;
        font-weight: 500;
    }
    #delete-form {
        color: #FF8800;
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
        <div class="add-button">
            <a href="{{ route('owners.create') }}">Add</a>
        </div>
        <div class="parent-content">
            <div class="content">
                <ul class="content-list">
                    <li class="content-list-item">
                        <h1>Owner ID: {{ $owner->id }}</h1>
                    </li>
                    <li class="content-list-item">
                        <h1>Owner Name: {{ $owner->name }}</h1>
                    </li>
                    <li class="content-list-item">
                        <h1>Owner Phone No: 0{{ $owner->phoneNo }}</h1>
                    </li>
                    <li class="content-list-item">
                        <h1>Owner Email: {{ $owner->email }}</h1>
                    </li>
                </ul>
            </div>
            <div class="content-bottom">
                <div class="button">
                    <a href="{{ route('owners.edit',$owner->id) }}">Update</a>
                </div>
                <div class="button">
                    <form id="delete-form" method="post" action="{{ route('owners.destroy',$owner->id) }}">
                        @csrf
                        @method('DELETE')
                        <a type="button" onclick="confirmDelete()">Delete</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function confirmDelete() {
      if (confirm('Are you sure you want to delete this object?')) {
        document.getElementById('delete-form').submit();
      }
    }
</script>