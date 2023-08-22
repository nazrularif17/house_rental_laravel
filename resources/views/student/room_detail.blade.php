@include('header')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .index-head {
        margin: 3%;
        margin-bottom: 0%;
        font-size: x-large;
        display: flex;
    }
    .create-date{
        margin-left: 40%;
        margin-top: 2%;
    }
    hr {
        background-color: grey;
        width: 94%;
        height: 2px;
        margin-left: 3%;
    }
    .detail-list {
        display: flex;
        margin-left: 5%;
        margin-right: 5%;
        margin-top: 1%;
        max-height: 65%;
    }
    .detail-left {
        width: 45%;
    }
    .detail-lefttop {
        max-height: 100%;
        height: 300px;
    }
    .detail-img {
        margin: 2%;
        border-radius: 2rem;
        width: 96%;
        height: 100%;
        object-fit: fill;
        box-shadow: 0 0 20px 0 #815854; 
    }
    .detail-leftbottom {
        height: 170px;
        left: 50%;
        top: 50%;
    }
    .contact {
        margin: 2%;
        max-width: 100%;
        padding: 3%;
        height: 100%;
    }
    .contact-detail {
        border-radius: 1rem;
        background-color: #F9EBDE;
        margin-bottom: 10px;
        padding: 5px;
        text-align: left;
        box-shadow: 0 0 20px 0 #815854; 
    }
    .contact-title {
        background-color: #fff;
        text-decoration: underline;
        margin-bottom: 10px;
    }
    .detail-right {
        width: 100%;
        max-height: 479px;
        overflow-y: auto;

    }
    .detail-desc {
        max-height: 100%;
        margin-bottom: 1%;
    }
    .detail-dtitle {
        background-color: #F9EBDE;
        margin: 10px;
        padding: 10px;
        border-radius: 1rem;
        box-shadow: 0 0 10px 0 #815854; 
    }
</style>
<body>
    <div class="index-head">
        <h1 class="head-title">{{ $room->roomTitle }}</h1>
    </div>
    <hr />
    <div class="detail-list">
        <div class="detail-left">
            <div class="detail-lefttop">
                <img class="detail-img" src="{{ asset ('rooms/' . $room->roomImage) }}">
            </div>
            <div class="detail-leftbottom">
                <div class="contact">
                    <h1 class="contact-title">Student Detail</h1>
                    <h1 class="contact-detail">{{ $room->user->name }} ({{ $room->user->gender }})</h1>
                    <h1 class="contact-detail">
                        <a style="color: black;" href="https://wa.me/0{{ $room->user->phoneNo }}">0{{ $room->user->phoneNo }}</a>
                    </h1>
                    <p>click phone number to direct to WhatsApp</p>
                </div>
            </div>
        </div>
        <div class="detail-right">
            <div class="detail-desc">
                <h1 class="detail-dtitle">RM: {{ $room->roomPrice }}</h1>
                <h2 class="detail-dtitle">Property type: {{ $room->roomType }}</h2>
                <h2 class="detail-dtitle">Range to college: {{ $room->roomRange }} KM</h2>
                <h2 class="detail-dtitle">Address: {{ $room->roomAddress }}</h2>
                <h2 class="detail-dtitle">Furnishings: {{ $room->roomFurnishings }}</h2>
                <h2 class="detail-dtitle">Description: {{ $room->roomDesc }}</h2>
            </div>
        </div>
    </div>
</body>