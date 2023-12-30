<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2-bootstrap4.css') }}" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    border-radius: 70px;
    font-family: 'Montserrat', sans-serif;
}

.main_bg{
    background-image: url('Gp/assets/img/background.jpg');
    background-color: black;
    height: 800px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
}
.form{
    width: 650px;
}

.form-text{
    text-align: center;
    margin: 0 0 40px 0;
}
.form-text h1 span img{
    margin: 0 10px;

}
.form-text h1{
    color: #fff;
    font-family: 'Montserrat', cursive;
    font-size: 40px;
    margin-bottom: 20px;
}
.form-text p{
    color: #fff;
    font-family: 'Montserrat', cursive;
    font-size: large;
}

.main-form div{
    margin: 10px 10px;
    width: 300px;
    display: inline-block;
}
.main-form div input {
    width: 100%;
    font-family: 'Montserrat', cursive;
    background: none;
    border: 1px solid #ffca00;;
    font-size: 20px;
    color: #fff;
    outline: none;
    padding: 3px 0 3px 10px;
    margin-top: 10px;
}
.main-form div select{
    width: 104%;
    font-family: 'Montserrat', cursive;
    background: none;
    border: 1px solid #ffca00;;
    font-size: 20px;
    color: #fff;
    outline: none;
    padding: 3px 0 3px 10px;
    margin-top: 10px;
}
.main-form div span{
    width: 100%;
    font-family: 'Montserrat', cursive;
    color: #fff;
    font-size: 25px;
}

#submit{
    width: 100%;
    text-align: center;
}
#submit input{
    font-family: 'Montserrat', cursive;
    width: 200px;
    background-color:#ffca00 !important;
    color: black !important;
    transition: all .3s;
}
#submit button{
    font-family: 'Montserrat', cursive;
    width: 200px;
    background-color:#ffca00 !important;
    color: black !important;
    transition: all .3s;
}
#submit input:hover{
    font-family: 'Montserrat', cursive;
    width: 200px;
    background-color: black !important;
    color: #fff !important;
}
#submit input:active{
    font-size: 19px;
    background-color: rgb(46, 20, 5) !important;
    color: #fff !important;
}


@media screen and (max-width:710px) {
    .main-form{
        text-align: center;
    }
}

.color-font {
    color:rgb(161, 36, 36)
}


    </style>
</head>

<body class="main_bg">
    <div class="form">
        <div class="form-text">
            <<img src="{{ asset('Gp/assets/img/LogoVilla.png')}}" alt="Logo villa"  width="500" height="">
            <h1> Booking Now </h1>
            <p>Tolong isi form ini dengan benar. Terima kasih</p>
        </div>
        <div class="main-form">
            <form action="{{ route('user.booking.store') }}" method="POST">
                @csrf

                <div>
                    <span>Your full name</span>
                    <input type="text" name="full_name" value="{{ old('full_name') }}" id="full_name" placeholder="Enter your name here..." class="form-control @error('full_name') is-invalid @enderror" required>

                    @error('full_name')
                    <div class="invalid-feedback" style="display: block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <span>Your email address</span>
                    <input type="email" name="email" value="{{ old('email') }}" id="email" placeholder="Write your email here..." class="form-control @error('email') is-invalid @enderror" required>

                    @error('email')
                    <div class="invalid-feedback" style="display: block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <!-- <---this is the select option--->
                    <span class="color-font">How many people ?</span>
                    <select name="people" value="{{ old('people') }}" id="people" class="form-control @error('people') is-invalid @enderror" required>
                        <option value=""><---People---></option>
                        <option value="1">1 People</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4">4 People</option>
                        <option value="5+">5+ People</option>
                    </select>
                    <!-- <---this is the select option--->
                </div>
                <div>
                    <span>Your Phone Number</span>
                    <input type="text" name="phone_number" value="{{ old('phone_number') }}" id="phone_number" placeholder="Write your number here..." class="form-control @error('phone_number') is-invalid @enderror" required>

                    @error('phone_number')
                    <div class="invalid-feedback" style="display: block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <span>What is the date ?</span>
                    <input type="date" name="check_in" value="{{ old('check_in') }}" id="check_in" placeholder="date" class="form-control @error('check_in') is-invalid @enderror" required>

                    @error('check_in')
                    <div class="invalid-feedback" style="display: block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <span>Until ?</span>
                    <input type="date" name="check_out" value="{{ old('check_out') }}" id="check_out" placeholder="date" class="form-control @error('check_out') is-invalid @enderror" required>

                    @error('check_out')
                    <div class="invalid-feedback" style="display: block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div id="submit">
                    <button type="submit" class="btn btn-primary" onclick="validateForm()">SUBMIT</button>
                    <p><a href="/">ADMIN</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
        function validateForm() {
        // var hasError = false;
        var fullName = document.getElementById('full_name').value;
        var email = document.getElementById('email').value;
        var people = document.getElementById('people').value;
        var phoneNumber = document.getElementById('phone_number').value;
        var checkIn = document.getElementById('check_in').value;
        var checkOut = document.getElementById('check_out').value;

        if (fullName === "" || email === "" || people === "" || phoneNumber === "" || checkIn === "" || checkOut === "") {
            var invalidElements = document.querySelectorAll('.is-invalid');
            if (invalidElements.length > 0) {
                hasError = true;
            }

            Swal.fire({
                title: "Pemesanan Gagal",
                text: "Harap lengkapi semua kolom formulir",
                icon: "error"
            });
        }

        // Jika tidak ada error, tampilkan SweetAlert
        if (!hasError) {
            Swal.fire({
                title: "Pemesanan Berhasil",
                text: "Pesanan anda akan segera kami proses",
                icon: "success"
            });
        }
    }
    </script>
</body>

</html>
