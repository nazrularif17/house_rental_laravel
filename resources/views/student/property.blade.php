@include ('header')
<style>
    .index-head {
        margin: 3%;
        margin-bottom: 0%;
        font-size: x-large;
    }
    hr {
        background-color: grey;
        width: 94%;
        height: 2px;
        margin-left: 3%;
    }
    .content-list {
        margin: 2%;
        flex-wrap: wrap;
        max-width: 100%;
    }
    .content-container {
        border-radius: 2rem;
        padding: 10px;
        flex-wrap: wrap;
        display: flex;
        justify-content: center;
        align-content: center;
    }
    .content-container2 {
        color: #815854;
        border-radius:  1rem;
        background-color: #F9EBDE;
        padding: 10px;
        display: flex;
        margin: 1%;
        margin-bottom: 1%;
        width: 46%;
        box-shadow: 0 0 20px 0 #815854;
    }
    .content-img {
        border-radius: .5rem;
        max-width: 221px;
        height: 100%;
        border: 2px solid #FF8800
    }
    .content-detail {
        width: 100%;
        padding-left: 10px;
    }
    .content-title {
        color: #815854;
        font-weight: bold;
        text-decoration: non;
        font-size: x-large;
    }
    .content-title:hover {
        color: #FF8800;
    }
    h6   {
        font-size: large;
    }
</style>
<body>
    <div class="index-head">
        <h1 class="head-title">Property listing</h1>
    </div>
    <hr/>
    
    <div class="content-list">
        <div class="content-container">
            @foreach ($propertys as $property)
            <div class="content-container2">
                <img class="content-img" src="{{ asset ('propertys/' . $property->propertyImage) }}">
                <div class="content-detail">
                    <a class="content-title" href="{{ route('property.show',$property->id) }}" class="content-title">{{ $property->propertyTitle }}</a>
                    <h6 class="content-">{{ $property->propertyAddress }}</h6>
                    <h6 class="content-">{{ $property->propertyRange }} KM to college</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>