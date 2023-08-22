<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN/SIGNUP</title>
        
</head>
<style>
    body {
    margin: auto;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    overflow: auto;
    background: linear-gradient(315deg, #00D5FF 3%, #33CC4E 38%, #E7FF00 68%, #FF8800 98%);
    animation: gradient 15s ease infinite;
    background-size: 400% 400%;
    background-attachment: fixed;
}

@keyframes gradient {
    0% {
        background-position: 0% 0%;
    }
    50% {
        background-position: 100% 100%;
    }
    100% {
        background-position: 0% 0%;
    }
}

.wave {
    background: rgb(255 255 255 / 25%);
    border-radius: 1000% 1000% 0 0;
    position: fixed;
    width: 200%;
    height: 12em;
    animation: wave 10s -3s linear infinite;
    transform: translate3d(0, 0, 0);
    opacity: 0.8;
    bottom: 0;
    left: 0;
    z-index: -1;
}

.wave:nth-of-type(2) {
    bottom: -1.25em;
    animation: wave 18s linear reverse infinite;
    opacity: 0.8;
}

.wave:nth-of-type(3) {
    bottom: -2.5em;
    animation: wave 20s -1s reverse infinite;
    opacity: 0.9;
}

@keyframes wave {
    2% {
        transform: translateX(1);
    }

    25% {
        transform: translateX(-25%);
    }

    50% {
        transform: translateX(-50%);
    }

    75% {
        transform: translateX(-25%);
    }

    100% {
        transform: translateX(1);
    }
}
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

    * {
        box-sizing: border-box;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-family: 'Montserrat', sans-serif;
        height: auto;
        margin: 20px 0 50px;
    }

    h1 {
        font-weight: bold;
        margin: 0;
    }
    .alert {
        font-weight: bolder;
        font-size: 100px;
    }

    h2 {
        color: #815854;
        text-align: center;
    }

    p {
        font-size: 14px;
        font-weight: 100;
        line-height: 20px;
        letter-spacing: 0.5px;
        margin: 20px 0 30px;
    }

    span {
        font-size: 12px;
    }

    a {
        color: #815854;
        font-size: 14px;
        text-decoration: none;
        margin: 15px 0;
    }

    button {
        border-radius: 20px;
        border: 1px solid #F9EBDE;
        background-color: #815854;
        color: #F9EBDE;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
    }

    button:active {
        transform: scale(0.95);
    }

    button:focus {
        outline: none;
    }

    button.ghost {
        background-color: transparent;
        border-color: #815854;
        color: #815854;
    }

    form {
        background-color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 50px;
        height: 100%;
        text-align: center;
    }

    input {
        background-color: #F9EBDE;
        color: #815854;
        border: none;
        padding: 10px 15px;
        margin: 8px 0;
        width: 100%;
        border-radius: 1rem;
    }

    .container {
        background-color: #F9EBDE;
        border-radius: 25px;
        box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
                0 10px 10px rgba(0,0,0,0.22);
        position: relative;
        overflow: hidden;
        width: 768px;
        max-width: 100%;
        min-height: 480px;
    }

    .form-container {
        position: absolute;
        top: 0;
        height: 100%;
        transition: all 0.6s ease-in-out;
    }

    .sign-in-container {
        left: 0;
        width: 50%;
        z-index: 2;
    }

    .container.right-panel-active .sign-in-container {
        transform: translateX(100%);
    }

    .sign-up-container {
        left: 0;
        width: 50%;
        opacity: 0;
        z-index: 1;
    }

    .container.right-panel-active .sign-up-container {
        transform: translateX(100%);
        opacity: 1;
        z-index: 5;
        animation: show 0.6s;
    }

    @keyframes show {
        0%, 49.99% {
            opacity: 0;
            z-index: 1;
        }
        
        50%, 100% {
            opacity: 1;
            z-index: 5;
        }
    }

    .overlay-container {
        position: absolute;
        top: 0;
        left: 50%;
        width: 50%;
        height: 100%;
        overflow: hidden;
        transition: transform 0.6s ease-in-out;
        z-index: 100;
    }

    .container.right-panel-active .overlay-container{
        transform: translateX(-100%);
    }

    .overlay {
        background: #FF416C;
        background: -webkit-linear-gradient(to right, #DCE2F0, #D4B996);
        background: linear-gradient(to right, #DCE2F0, #D4B996);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 0 0;
        color: #815854;
        position: relative;
        left: -100%;
        height: 100%;
        width: 200%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .container.right-panel-active .overlay {
        transform: translateX(50%);
    }

    .overlay-panel {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 40px;
        text-align: center;
        top: 0;
        height: 100%;
        width: 50%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .overlay-left {
        transform: translateX(-20%);
    }

    .container.right-panel-active .overlay-left {
        transform: translateX(0);
    }

    .overlay-right {
        right: 0;
        transform: translateX(0);
    }

    .container.right-panel-active .overlay-right {
        transform: translateX(20%);
    }

    .parent-option {
        display: grid;
        width: 100%;
    }
    .child-option-gender {
        display: flex;
        width: 100%;
    }
    .child-option-gender label {
        display: flex;
        font-size: 13px;
        font-family: 'Montserrat', sans-serif;
        align-items: left;
        padding-right: 10px;
    }
    .child-option-status {
        display: flex;
        width: 100%;
    }
    .child-option-status label {
        display: flex;
        font-size: 13px;
        font-family: 'Montserrat', sans-serif;
        align-items: center;
        padding-right: 10px;
    }
    .radio {
        font-size: 13px;
        display: flex;
    }
</style>
<body>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
        @if(session('error'))
            <h2>{{ session('error') }}</h2>
        @else
            <h2>STUDENT</h2>
        @endif
    <br>    
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{ route ('studentregister') }}" method="POST">
                @csrf
                <input type="text" name="customID" placeholder="Student ID">
                <input type="text" name="name" placeholder="Student Name">
                <input type="number" name="phoneNo" placeholder="Phone Number">
                <input type="email" name="email" placeholder="Student Email">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="password_confirmation" placeholder="Confirm Password">
                <div class="parent-option">
                    <label class="child-option-gender">Gender</label>
                    <div class="radio">
                        <input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Female"> Female
                    </div>
                    <label class="child-option-status">Status</label>
                    <div class="radio">
                        <input type="radio" name="status" value="resident"> Resident
                        <input type="radio" name="status" value="non-resident"> Non-resident
                    </div>
                </div>
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{ route ('studentlogin')}}" method="POST">
                @csrf
                <input type="text" placeholder="Student ID" name="customID"/>
                <input type="password" placeholder="Password" name="password"/>
                <button type="submit" name="submit">Log In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 id="heading1">Create Account<h1>
                    <p id="paragraph1">Do you have an account? <br> go to login</p>
                    <button class="ghost" id="signIn">Login</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 id="heading">Login Account</h1>
                    <p id="paragraph">Don't have an account?<br>go to sign up</p>   
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('admin') }}">Are you an admin?</a>
</body>
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
</html>