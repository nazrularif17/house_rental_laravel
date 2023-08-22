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
    .add-button{
        position: absolute;
        right: 8%;
        margin-top: 1%;
        font-size: 16px;
        background-color: #815854;
        padding: 5px;
        padding-left: 10px;
        padding-right: 10px;
        border: 1px solid #FF8800;
        border-radius: 5rem;
    }
    .add-button a {
        text-decoration: none;
        color: #F9EBDE;
        font-weight: 500;
    }
    .content {
        border: 3px solid #815854;
        background-color: #F9EBDE;
        display: flex;
        padding: 2%;
        margin-right: 4%;
        width: 1100px;
        margin-top: 60px;
        border-radius: 1rem;
        height: 410px;
        overflow-y: auto;
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
        margin-bottom: 10px;
    }
    textarea{
        background: transparent;
        font-size: 16px;
        font-weight: 500;
        width: 100%;
        height: fit-content;
        min-height: 100%;
        resize: none;
        padding-left: 10px;
    }
    select{
        background: transparent;
        font-size: 16px;
        font-weight: 500;
    }
</style>
<body>
    <div class="index-head">
        <h1 class="head-title">Property</h1>
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
        <form method="POST" action="{{ route ('rumah.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="content">
                <ul class="content-list">
                    <li class="content-list-item">
                        <select name="ownerID">
                            <option value="" selected disabled>Select an owner</option>
                            @foreach ($ownersWithIDs as $owner)
                                <option value="{{ $owner->id }}">{{ $owner->name }}</option>
                            @endforeach
                        </select>
                    </li>
                    <li class="content-list-item">
                        <input type='file' name='propertyImage' placeholder="Image">
                    </li>
                    <li class="content-list-item">
                        <input type='text' name='propertyTitle' placeholder="Title">
                    </li>
                    <li class="content-list-item">
                        <select class="form-control" id="propertyType" name="propertyType">
                            <option selected disabled>Choose property type</option>
                            <option value="bungalow">Bungalow</option>
                            <option value="townhouse">Townhouse</option>
                            <option value="terrace">Terrace</option>
                            <option value="apartment">Apartment</option>
                            <option value="condominium">Condominium</option>
                            <option value="flat">Flat</option>
                        </select>
                    </li>
                    <li class="content-list-item">
                        <input type='number' name='propertyPrice' placeholder="Property price (RM)">
                    </li>
                    <li class="content-list-item">
                        <input type='text' name='propertyRange' placeholder="Range to college (KM)">
                    </li>
                    <li class="content-list-item">
                        <input type='text' name='propertyAddress' placeholder="Property address">
                    </li>
                    <li class="content-list-item">
                        <select class="form-control" id="propertyType" name="propertyFurnishings">
                            <option selected disabled>Choose furnishings</option>
                            <option value="fully furnished">Fully furnished</option>
                            <option value="partially furnished">partially furnished</option>
                            <option value="not furnished">Not furnished</option>
                        </select>
                    </li>
                    <li class="content-list-item">
                        <input type='text' name='propertyDesc' placeholder="Property description">
                    </li>
                    <input class="submit-button" type="submit" value="Save">
                </ul>
            </div>
        </form>
    </div>
</body>