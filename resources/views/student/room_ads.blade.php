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
    .testbox {
      display: flex;
      align-content: center;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      margin: 2%;
      width: 50%;
      margin-left: 25%;
    }
    p {
        font-size: 15px;
    }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #815854;
      }
      .form-container {
        margin-left: 15%;
        max-width: 70%;
      }
      input, textarea, select {
      margin-bottom: 10px;
      border: 1px solid #FF8800;
      border-radius: 3px;
      box-shadow: 0 0 20px 0 #F9EBDE; 
      }
      input {
      width: 100%;
      padding: 3px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: 100%;
      padding: 5px;
      height: 72px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #333;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #815854;
      color: #333;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #FF8800;
      font-size: 16px;
      color: #F9EBDE;
      cursor: pointer;
      }
      button:hover {
      background: #fff;
      color: #FF8800;
      border: 1px solid #FF8800;
      }
</style>
<body>
    <div class="index-head">
        <h1 class="head-title">Room Form</h1>
    </div>
    <hr/>
    <div class="testbox">
        <form action="{{route('room.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-container">
                <div class="item">
                    <p>Room Image</p>
                    <input type="file" name="roomImage">
                </div>
                <div class="item">
                    <p>Room Title</p>
                    <input type="text" name="roomTitle">
                </div>
                <div class="item">
                    <p>Room Type</p>
                    <select class="block w-full mt-1" name="roomType">
                        <option selected disabled>
                            Select type
                        </option>
                        <option value="single" >
                            Single
                        </option>
                        <option value="sharing" >
                            Sharing
                        </option>
                    </select>
                </div>
                <div class="item">
                    <p>Room Rent Price</p>
                    <input type="text" name="roomPrice">
                </div>
                <div class="item">
                    <p>Range to College</p>
                    <input type="text" name="roomRange">
                </div>
                <div class="item">
                    <p>Address</p>
                    <input type="text" name="roomAddress">
                </div>
                <div class="item">
                    <p>Room Furnishings</p>
                    <select class="block w-full mt-1" name="roomFurnishings">
                        <option selected disabled>
                            Select furnishings
                        </option>
                        <option value="fully furnished" >
                            Fully Furnished
                        </option>
                        <option value="partially furnished" >
                           Partially Furnished
                        </option>
                        <option value="not furnished" >
                           Not Furnished
                        </option>
                    </select>
                </div>
                <div class="item">
                    <p>Room Description</p>
                    <input type="text" name="roomDesc">
                </div>
            </div>
            <div class="btn-block">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body> 