<?php
    //Bubble Sort 
    $array = $_POST['array']; 
?>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="home.css">
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<body>
    <!--Banner-->
    <div id="banner">
        <div id="title">
            Summers Middle School 
        </div>
        <div id="motto">
            <i>"No Child left behind no matter what!" Est. 2000</i>
        </div>
    </div>
    <!--Side Menu-->
    <div class="sidebar">
        <h1 id="name">Welcome Bruce Wayne!</h1>
        <a href="#home"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="students.php"><i class="fa fa-fw fa-user"></i> Students</a>
        <a href="teacher.php"><i class="fa fa-fw fa-user"></i> Teachers</a>
        <a href="attendance.php"><i class="fa fa-fw fa-user"></i> Attendance</a>
        <a href="mailto:Students"><i class="fa fa-fw fa-envelope"></i> Email</a>
        <a href="fee.php"><i class="fa fa-fw fa-money"></i> Fees</a>
        <a href="grade.php">Grades</a>

    </div>
    <!--Announcements-->
    <div id="annc">
        <h1 id="annc-title">Adminstrator Announcements</h1>
        <ul>
            <li>This month we will be celebrating Black History Month, so make sure to have your students read a novel by a Black author</li>
            <li>On March 2, we will be having early dismissal for all students</li>
            <li>Faculity Meeting will be held every other Friday </li>
        </ul>  

    </div>
    <!--Faculity Courses-->
    <div id="fac">
        <h1 id="annc-title">Your Faculity Courses</h1>
    </div>
    <div id="msg">
    <form>
        
        <textarea id="w3review" name="w3review" rows="4" cols="100">
        Send a Message to students here.
        </textarea>
        <br><br>
        <input type="button" onclick="displayAlert();" value="Send Message">
        


    </form>
    </div>
    <!--Courses-->
    <div class="container-fluid p-0 m-0 
                align-items-center 
                justify-content-center d-flex"
            style="min-height: 100vh;">
  
        <!-- Row for the card-->
        <div class="row w-100 p-0 w-0" style="padding-top:500px;">
  
            <!-- Another column for card -->
            <div class="col-lg-4 mb-2" style="padding-left:600px;">
                <div class="card  mx-auto" style="width:18rem;">
                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaSRZz4XjflFVI8LoFL_RWivgSwsl7UQnMnQ&usqp=CAU"
                                alt="Card image cap">
  
                    <div class="card-body">
                        <h5 class="card-title">
                            Calculus I
                        </h5>
  
                        <p class="card-text">
                        In depth study on basics of calculus, inclding derivatives
                        </p>
  
  
                       
                    </div>
                </div>
            </div>
  
            <!-- Another column for card -->
            <div class="col-lg-4 mb-2" style="padding-left:300px;">
                <div class="card  mx-auto" style="width:18rem;">
                    <img class="card-img-top" src=
"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVEhgVFRUYGBgYGBgSEhkYGBgSGBgZGBgZGRgYGBgcIS4lHB4rIRgYJjgmLC8xNTU1GiQ7QDszPy40NTEBDAwMEA8QHhISHjQrISs0NDQ0NDQ0NDQxNDE3NDQ0NDQ0NDE0NDQ0NDQ0NDQ0NDQ0NDQ0NDQxNDQ0NDQ0NDQ0NP/AABEIAL4BCQMBIgACEQEDEQH/xAAcAAACAwEBAQEAAAAAAAAAAAACBAEDBQAGBwj/xABGEAACAQIDBAYFCAgFBAMAAAABAgMAEQQSIQUxQVETImFxgZEGFDKS0SNCUlNicqHBJDM0c4KisbIVY7PC8EOjw+EWdIP/xAAZAQADAQEBAAAAAAAAAAAAAAAAAQIDBQT/xAAjEQEBAQACAgICAgMAAAAAAAAAARECIRIxQWEDUSKBEzJx/9oADAMBAAIRAxEAPwD5koo1FAKsGtbufRgUa0C0dqGdEhtTKvwNLCrFa1OI5TQyx8RVuBwjSSKiDrMQo8eNSDevW+hGEyLJiSt8gyRDm7W3fgPOly67PhvK49GqR4TDOiHRAelPFnKg7/GvG7FLIFGTpDiGCmNvZMYPWY8ieDcMpNa+24ndUizdTM74h+N1s7k+dh4ViLjbl2RflJLQxKPmJusORIsPOjjGnPl3PpRt/ZHq8gysGjcdJC4NwUJ3X5jdWXavW7QwqPgQEcu2FfJIfmlX1bJ9lW0v2GvK04x59UIIrtKmotTQkAVxWotXWoDa9FsIr4gO/sRK08nKyageJtT2KbPJI02gNsRjjfUD/o4ZT9LcDbifsVfsJOhwLyZczzyrHCm8vkPVFuIz6nsW3GqHyoGzEOkDdJOb3GJxT3yrf5yKb+CufnCpvtvJkivEB3IjJCSTAS4k7lhgQXjS3BQoDEfcG+mdjQLMZTcokkUmEwicTkXpMx7ioJP0pKzyWf5LNebEN0mJdtyJ7YUngAOu3co4VpbDZHxiOCUw8BSCIn57OSii30nLM57KKJ7ePIobU5tODJPIh3q7r5MaTYU2XziMta+27pHBCNFESykc2cscxPcdBwrJFWz4hny5jfKqot+CruFLFS4qhcqwZTZgQVI4HhXrtoYomTEFjdo8Okd7AG75Ax07zXlcORnXNoMy5u64v+FPY7HkyTlTdZWIv9kNdbeQoVOWQxjow2CgRHBIds66Xu7dXy186ydtfr37CF90AflV+zWCyK7bku/eQNB52paYZiWO8ksfE3ow/OYTtXGjdLUIoPQXrQwm15o/Zc25HrCknXjXLSs1U5Wdx6vAelpBGcFT9JDWz/8ANF+ub/nhXzsmhtUeEaf5uataMCuC0QrRnakCiWoAoqGdTRUFEKoqNeyvouKmGDwESn27B7c3YaX7r3rxGwsP0mJiT6Ui37gbn8BW96QTnE44xk2jivm5BU1Y/lU3uq43xlvyJYpXw0MWmfFSuxJvcL1Tr2aZu4VnbSwyQMjwOzowdFdlCnMhyOVtw10PbTk+0yI4ZwN00tlGlkyKmUcuqaeiOGmwsuTD9FHEjFJHcu/SH2VTtJAvROisnLr5T6PbKcYOWQkZJ45I1XjmQZ0a3I5XFeLN69tsPaT9Hhi56vrKYZQBYZBE6nTneXU15THRhZpFG4O6jwYiiey55JMLB+dEfCpArslWw2Iy1IWuC1obDwvSYqJODOpa+7KpzNfwBoOd3HoNphoEhRb9II1gwycQ7/rZbcGJbKp7TyrNmwWf9HR1VMOrs7nVXmKs7nThZCoPBUvx1ulxjZ5sY7Xcu0OE5A63cDkinTtalMMjvhwkBUsTIJUuBI4bIQVB9oWS2muraa1MbWy1lq72dhmOYZZGsSbMb2LcLkeNbezwrSRxq1ocPbFTuPnuMpYg9+VF8edXbLwqSYMoHCMzBOt/1JWfMAANbKiJqdAXalNkorKEJ6i3xWMYcUj9iPt+MnZSvYksxV6WxZcbMOb5h/EoN6xStej9NDfFZgLB4opB3MlefvVT0jn1yqu1QVq00BWjEyq8tcVoiK6jD0b4Z1RXI6r3ynnbfVatWxtdwI404qM1uQKLb8670agDTZiActrA7rsbD86WrzbjIIvVTJTmK1kf77f3GrsXs8pEjlvbv1eVFKayuygK07h8MZHCLvNUyIVJU8DY+FJcpU1NX9AxUtY5RoTVFqFagNRCqRVgNCrForr0GaozUJxZepqu9EDQWPVegcY9aLndHG8h7NwrPfFXD5dXnc9+XNcL4k/hWnsaXCRI9sS4aSMxSXiuFzWvlNNbMwGBRulXFnq3RM6HqsRo1uNtaWq8dkmk9obOIhhhQl3DyZwPZVgEZ9eQGl6ofHTYpBH1FjiUu2UCNFAHttbidw769EmBhGFMaY5FV2e7uti4OUugNxbUC/OqW9HQ0Cww4rD2JzynNYu3zdx0VeA8aNF4X4ZmGxCvHhYY2t0TPicQ5BATrAltd+VVHfcClvShQMZLYAAvnWw3hwHB8c1bKeiE6xOiPEWcgO2e10XUKNNxbU9wqzbfotiZGjZFUkQRRyddR10XKbX37hrTlmpvC2enjA1FmrVn9G8UntYd/AB/7Saz3wrr7SOvO6sP6iq1heNnuKs1bnow+V5pfq4HYHkz5Y1/vJ8Kw69DsjC3wUxvlEkscTsfmpGpkdvAZe82FK+j/HO+i+IxIyhwOog6DCKd5t7cpHO5v95h9GgwEsMSLK15JQSY47FUQq3VeRvn62IUctTXNMLGe1gPkcGh4BRYv25Qb34u3YaOLAABIScrOOnxTfVxKMyKeRt1rcSyChXzodlypGrYhmXOA8cCD2mdlI6R+AChr9pA5U5FCI8OkTaNNbE4k8Vw6XKL3tYnxWkNmYZJJmdhlgS8sgvc5Aeql+LMbL4mmppTIWd9DJ+kSgfNhQ2jiHLMwUdwU0U+PofpdJnbDyWtnwsTWG4aHSvPVv8ApQWKYV2Fi2HW43W6x/CxFeeBo4+kfkn8q411SDXFqpKAKi1STXGgNeSdJcOC6WeEorONQ8ZNgGHMWo22jEZXVUKI4VAyDKwKnR8vjSmM2szxLGERALFyosXKiylu6h2VPEmZ5AzOusSj2SebHsqcbS9mcPsrLNZz1CHKEj28vZw31G33ZxHl1TJmSw3H516s23inePDsd5Rt2m9q0dnwlInQEM4jLC2oUv8ANvzpfapJtkZOy8IyZXBF3R2jtvBFt9Y6IzvaxLH/AIa0tmiR3QLZRDcknSw49+6rJgYZFlJDZ8zWHC9BZ0px0mSBYrat1mP/ADxrFtWu0wnjKkddLlCOI32NZ3qr/RPlQekxXE1wqKS03qQaGuFAxpbJwglkCnRQC7nkqi5p7amCiESTwlgrsy5G1K5d+vGqtgnqz239C2XnqeFa+2sMowiRL7cGV5AOUi3J8DagrOnmBVq1QKuSqjKtTED9Dh+/N/srOArTnP6JD9+X/ZWcTrRE29tPZuzjJFLIXK9Gt0A1zsAXI7AEVjWzh4mnw2FOdlCPLFMwYjLGtpSSR9m9qzsNizFhUYAHPJPcHkYhHr75NXbDd3wmKgT2upKAN7dYI4HhalWnH9fR/DbSxDrNNG0nXbo8LGuZgtrM7hOORAOy701htt4pwkaMjyhTNK7hcqLbqRi1utYi/awHCqBMUskSs64d4o5Cil2srGSVrLrZnAH8ApL0YcKJCTlZCJpAQdY40kNr8OuyaHsoxW2WTTsHpI7QvLJBh2CskaDo+s7tc5d5sAoJv3c60NtbTjw8ccL4ZCJE6aSNDkVGJAtu1N0PLdXmNg3uHYApB8oi8HlchY1PMlgPBDV+3x0mNyFiRGqxO28nokLSN3kh/E0Z2U53x3+j8WJwMylmw8iCJVYlXzqFzgBApa2rPy51LvgH6QesTKZSruzpdjZi2XRbBb5T/COVIzqi4JmjBHS9GzozB2SzkKAbC6nI5BPPsrz5NEmo5crM2R687Iw7xiKLGxAF+kkz9Rn0sg36ADN4sTTB9G5WPzHRpA8mR9Cka/JxLe2m8eR4V4bNT2zIGcsc5REQySML3AFgAoG9iSAB20WfY48pb6en9INj4mWGAmItIvS9Iq2awZ8wtru1Feak2HiRvw8vuMf6CvUTJIuFREmcFMQVkfMyOiNEsjK5BOqa3FyLilG27iCAweXK7dKwUlikCdVbngWsbns7aJarlx427debbZ8o3xuO9HH5Uu0dt4I79K9nhvSaYqHeTcXmlAt1VvljiXlmOp42q1/SCRcMXkSN3OVrMikAO3UUjj1VY+Io2p8OP7eENTXppNsJlV5cBDZ7lWUGPNY2JFqqG0cEd+EZfuufzp79J8Z+3mzUEV6MvgG+ZOncytQHC4Ft00qfeQEfgKNOT9WMAuSACSbaDsHZRxYh19liNb6HjUYlVVyFbMoNla1rjnaqqZdpZjcm5ud/b31o4nGl8OFcgkEBQBqAKy2qvPUqmtnYmNQSIrKAuuY8Sbca2PWYv+CvIQy5WvR+sGjGk5Xj1hANXGhvXUl46iFdUhaBTez8a8Lh0NmFxqLjXmKmTEO7M7MSze0b7+/sqhFqxVp4ztQtWioFGKpFrTn/AGOL95L/AESs21aOJb9EiH25f6JWbelC5NrZ+11jhyGFXdXaSF2NxGWABOTcxuoIvTXojjQuMBdiOkDxlvtORYnlrrfsrzoo1a2o37xRhTldl/TY/wAMkTEdGkmWRQXlbP0axi+9nB5WJ77b61HnhcOokLNiiIs5IVlEIVUeQEfPdQSNNCOVJzskyetvYlAI5k4vKBaNuxWXU/uyONZuUJBmPtzaJ9mNG6zd7MLdyHnSXuevTR2A9pArrZMOXxcwO8tGtkU9zWHexrPwOKHTF5CbOJA7AZiDIjrmtx1a9X5uiwfJ8S3iIYz/ALn/ANOsgmqRbmRstOrwYgroFbDiMHgiZ0X+ov2msbNUE/8AuhvS9Fe1mavQbGnVMLIyqXdJEkCgX3KwR2HFVc3tzy30rziimsNK6MGR2RhuZSVOu/UU80pfG69LgI5DgsRG5ZWaaF3ze1lk0YtfUXAuaWSYvFM8eoAcOgIDKgVEiOXiipn3biaDZ8rHCYvUknonYk3J69mJP8VVQ4YRvcaGKJmnP25FKqn86r33pY08tk/4t2ngjHEhNsl0jZRoXYJndiewuV8KjaiN0EZb253aW3JQAiDyJp7FznFDDrlyB3diAc2VECBjfwdvGk/SLGXxKkDqxqgC8h7WXyIHhShXJLZ66X+lcDokMWQhEBAbgWIHVHgL+JrzVq3NtY9XDWdnMknSksCuQAEKgvvIudRppWGRVcfSPyWW9IBqSKEijpoUMKG9S51qpqmtZBu2lUVLCgJpNOMRU3qK6hRcVNqiuFS1GoqxRVYajU04jkuBoqBTR02VEDRChFEKpNaWI/ZYh9uX/ZWdetDEfssX35f/AB1n3pQVN66uJob0040NnY0Rlg4LRuuSVQbEre4ZeTKbEH407iY4nkMjzIYhYIiZukKKLIgQjqGwAJOm861hippYqXJhvH41pZC5AGgVFX2URRZUXsA+NK01s7C9JKiHQMwDEbwu9iPAGrNoFGdWRVUFFJVb2U8Rrxta/bTK+tJhaErVwFcooRoUWrFWuUUVr00W62vRZx0rpbNnicBeBZLSKD4p+NU4iOTK6XubpLiNNekY2VL8Td93O/KqNl4nop45PoOC33dzfgTW5PaCR7G4iLTknXPJIbQd4VTm771N9teOXiDAYQRZ7tfUYcHgLLnxJHYAMt+ZrzeJmLyM53sxbzN63tqgwwohPWZMi332JzzOfvPZR2Ia86Von7LncyIvXM1GqXIHPSnNu29YcKAACFFtBooB/EVSJOtZ16IHSgIoSKDzVb76G1WZKgipxpKArVLratAwKI1YnrMTpwsKVkSkqXKotUWojQULLiuFQDRCpbVIFWqKFBVi00cqJTRCgvVgps6IUYNBepBqkWNHEt+jQ/elP4oKzr09i2/R4B+9P84H5UjepOpAqQK4VNUm1wFSBRCioTatwWIaN1dbXUhhfUG3AjkaaxqOyLKwUI3URUsoQa5RkGqg2YgnfY0iK0sbJlLxngkUa9jJlvf+fzoEuy6zr116kCidCDYix00Isddd1NDlFHm5VWKkmmmpZq1sPtdcqCWJZCgAjJdlBC3yBwPbC3Nt3Ksa9SKXtUt4+jeNxTyyF3a7Nv5AcABwA5VGEwpkfItgcrPryVSx/pS4vWt6PIem/wDzl/sai9QT+V7R6OYNZJgXvkQCRrG24i3hSO079NJcWOd9D940WABMiKCRnZVaxtdbi4NX7RvNimyC+dwB+A/Kl8rmXj/bKNRamtoYbopGQkEqbEjduB086UJppyn9kRBpbEXAVj5Cs41qbBHyrdkbn8BWVal8tM6hssfVwCRbP1RbXzpFqf6K5jTmBfxOtFtLA5ZGyDqhgo7TbWg/tlMtV2p2PDZlck2KC9u3WkqlcKAUYoRRrUxtViiuJqCa4CqQJasvQipAoTU3ogaGptQk/jD8jB91/wC80mKueUsiKfmBgP4jeuw8Bd1Qb2YKPE2vQVuqwaktWtJIjxyoiKFjAeN8ozsQ4Ri7bzmDXtuFhWSFpwrMSDU567JXZKaelsRuQOZA86b2k155T/mP/eaowKfKoOboPNhU41ryuftuf5jR8lZ0v2fCHmRTuLDP90dZv5QabxMLz4rIPbcoo5A5FuSeQsSewUtsvQyP9CJz4vaMfi9MYIsI5Jb9dsuHRieMl85vw6ikX+3R8jJkhTHKgkYRklASEJ3kDTN47/Gh2nCEkKjVbK6HmrqGG7vrpMK4RnIsFbo9dCX1uqjiRbXlcc6dxWH6R8Kt7Z4EDHkEd1ZvBUv4UrRx46gxFdno3B8Q/jkjUD8Was5WFezCI8eCTIFRncldbBWUkE33nKQSedea2lg+iSJCLOQ8jnjYvkQd1kJ/io41X5OHyULXFa3o03y5/dy/6bVXjsKiYWEiRGLF3KqGuLkLqSOGUiu9HP1rnlDMf+2aduxEmcop2N+0R9hv5KTRbIkAkZzuRGfzsPzNU7HPy6dgY/yNUbNPyc5/ywPNwKVVxnU/tzxGWTNuWRyqk8+7yq/YeFvJJmF8iOSDzGlaWE2ZmERJssSdI/A5nOYeZsK0sPhlRMU5GrBlU9ltfxvSvJpx4X3XmvR+PryH/Jf8qz58MVVSfnLmFevfIkegtnwzStYWOthXnNryplRY2JAQA5udEo5ccnsOGW8kXYt/IU3tRWIjYDTN0jdlzpfzotjlBIudSx6K6cu29aGJYNGykgFigQeOtFvauPH+NYg2c7LIykdY2A4nS/50r/gL16vBlLrYjRhfssADTfSD6S/hU61n45nt8pFGtADRqaYqxVozaq89SKaLBg0VV1YooRXCjAqVSiy08Ta4VobDA9YTMwW+ZQzGwDMjBSTwFyKRAogtGJ8sp7E7LmhBzxuo3E2OQj7w0I0pO1aGB2pLF7Dtl4oSWRhxVkOhBqrasYSeRFFgHYKOQv7Phu8KYuXuGIMLhwgaWdrkA5Ioy5F+DO5UA916SxeQOcmfKLWz5c/iF0FNYPa5hjyxxoHuSZWXpHAO4Jm0XvAvWfLKzsWdizE3Yk3JPMk0C5hzZGuIiH+Yn94qiY3YnmxPmaZ2CL4qH94h8jf8qXQHffto+U3qNXC4GRcNM7oyKwjVWcGMMM4dspa2b2BuqjEH9FjA3dLKW78kWX8M1X9Oz4WQu7OekiF2YuRpId5pAYvLG6WuGysOGV1vZh4FgR29lB3OsaHpC+fomUqRkGdV3iVgHcleObMLHstwq2QAYgRZlDJhmwwJYKokMb5gWOg6zsPCvPRylWDDQghgd9iNxrsxJJOt9TxuTvJqcPfl6l8cmRyrqBEXjiFwCQ0KQoyjiOoWvwpX0olV51lRw6ui2ta4KdRgRw1Un+KsELViLanOPZcue8cq15GYKDuUEL3Elj+JNaWwW68v/wBac/yVkljWnsO95+zDTf0FVfSOH+0KbHPyt+SSH+Rqe2Y8a4OclGZzkUktZLM3VsBrcb6S2WOs55RSH+W3510eIVcO6fOd0bwW/HvqbGkuNx9oZHVSBklSJyxOgVBfTxFUpt9GXI6sAzP0hFj1WJy2rzpcmwJNhoOwdlStHjBfy2enpE2h0yTdWypA0cfPLfS/lXl5AbVs7McCDEn7AXzJrISVgwK+0CMvHWidaLbyy0+85ikXTUIFIPbSuI2gxdWt7IsPjT+34CJFze2UVn76xpiBRnR22csFh8WVZm1uwI86X6d/pHzNC71XmpLmlgKICq1NGDSb2DFEKrDUQamixbRKaANRAUIsXBqnPVNSDQnxMLJ2UzDh3dWdVJVLF7a5QdASN9qQBpjDYt43DIzIw3FTY91PU+M1pbNg06eQWiQ3/eONVjXnc7zwF6zp5Wd2cnVmLN2ljc/1o8btGScgyOzkCy33AdgGgpe9qYsk6ia6gLUUYuQLgXIFzuHaeygY0/R/9pQ8s7e6jn8qz1etjD7OfDlpXaMoqSBHSRJA7OjImRQ2Y6sOGltbViilDsyZVomNrAmxNyOBIvY28T50DNurgtTamjoINWqKrA1q29ELlUnsqVpzbQAmNvoRkeMaH86UU04nlM6Qa0NkOFMt+MEq+JWs52tQLLRRN9tPCIRBI11GYZQCOsQpBbKeG8acazytaksqerJuLm6qN5XrEsx5X0FJvItrAUorlMyFCbV2bWukN91QotTL4OxTBY3T6dvwpaOyupO4EE0Nr0Mgow5b009v4rPKHU3BUWNYkz3o2aqS/Kp+MaSbdVNQ3onNV3pNZFK0YNUhxzHmK4yDmPMVOt/GrM1SGqrOOY8xUq45jzpaXiYVqsU1QrDmPOrVYcxVRnyi0GiBoVI50dxzps64CpK0QtzqSRfeKaA1xFPbJw6yzBGOhV2JBAIyIz381FZ4lB5Ujy5rR2Psxp5CoNgFZ3a18qrxt3kUior0GxsQIsHiZbgM5TDR7uIJe38Jv4CsAsOdEO+o1v8AB7YV5mYhhkypYWs5G887FTa2mZddbVlgVsYzbKMroA2RkXLqoIkDq5J5roF52UVjhxzFETy+k3ria4sOddcc/wAapGJU0YNVhhzosw5igWNHbZ+UQ84YD/2kpHNTm3nHSJqP1EH+ktZvSd1KU7x7E5qnKatDUQYdlHsTpC3q0CgzDnRZxzqkXsINWBaBbXqwOBvIoKxNqpnaolxA4WpdnvxotXx4X3QPrXKtSWHMVS8g5jzrOt5LenSmq7UJkHMedd0g5jzo1pONfp3YmEQ4WAlE/Ux/NX6C9lPepx/Vp7i/Cqdh/ssH7mL+xafrF7y3qcf1ae4vwrvU4/q09xfhTNdQC/qcf1ae4vwrvU4/q09xfhTFdQC/qcf1ae6vwrvU4/q091fhV9dQWF/U4/q091fhXepx/Vp7o+FM11AxjT4zDoyghLFmjZgospVGZgTbkpB5a3rpsZhlKjKhLkquVA24Obmw3fJuO8VZNsaNy+Ysc2a+oAAZGU2AHJzqdd2ugoU2HGrBgWuGDLqLAXlOUC275WTt62/QWDDHjsKyhuoAVElmUKQGta4tv1GnaKlsXhgVGVeszLfJ1QUBZszWsLWPiDyNdHsGJTcXOiAk5bnIVyEta+gVRvtYbr60cmx43LZixzMzMLgAhlZGWwG4gnXfu10oGKp8bhlQsAjWBbKFAOmhvcdXxtTDNAFViI7McqnKDmOp6throCb8hfdVJ2FGc9y56QZZrsD0g3DOLW0GmltN96u/wtbIAzAJ+rsRdVNwVBtqLG2t9wtYi9BYpOMwg3mLl7I7Nd27Ua7taZjSBgpVYzmBKdVetbfYWvpS8ew4lN+sbLkF23IpBVR2DKLcdTcmnsPhlRQFG4sQTqRnYsde80HjPOKgGb5E9WZMMfkh7b5Mrdidcan4XobaUGV2WAsEGdrLECVu4zjMw0zIwt7V+FOSbKBzfKOM8iTNbJoyZcluruGRPdHM3sXZcd2NtWkWZ9wzOtst7DcCAbcxfncGFJ8dAqSM0RHRN0bAxjMxEYeyA+0Mp37tDw1rp8VCqyEQFhEbPZY00y5iwzst14X8r1dPsaOTP0l3ElzZsvULJkJQhQQcthvO6rG2at2JZiGZGK9UKMhBUCyg20G88KBhGXaMC57wEGNVdwUjBCtm1N2svst7Vr20vWpHh42AIjWxAIugB111BGlLzbJUsWzyBiCoIb2VJJZRceySdxvbS1rCz0MYVVVRZQAFHIAWAoLFfqcf1ae6vwrvU4/oJ7o+FMV1AyKPU4/oL7q/Co9Tj+gnuj4UxXUDIX9Tj+rT3V+Fd6nH9Wnur8KZrqBhf1OP6tPcX4V3qcf1ae4vwpiuoMv6nH9WnuL8K71OP6tPcX4UxXUB/9k="
                            alt="Card image cap">
  
                    <div class="card-body">
                        <h5 class="card-title">
                            Calculus II
                        </h5>
  
                        <p class="card-text">
                            more advanced study on  calculus, getting into integrals
                        </p>
  
  
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    class MyDB extends SQLite3 {
        function __construct() {
           $this->open('Student_Management.db');
        }
     }
     $db = new MyDB();
     if(!$db) {
        echo $db->lastErrorMsg();
     } else {
        //echo "Opened database successfully\n";
     }
     $sql =<<<EOF
      SELECT * from Teacher;
    EOF;
    $ret = $db->query($sql);
    while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
       //echo "ID = ". $row['teacher_id'] . "\n\n\n";
       //echo "NAME = ". $row['name'] ."\n";
       //echo "ADDRESS = ". $row['email_address'] ."\n";
       //echo "SALARY = ".$row['password'] ."\n\n";
    }
    //echo "Operation done successfully\n";
    $db->close();

    //print unsorted array
    /*
    echo "Is this correct <br>"; 
    $id = $array[0]; 
    $password = $array[1]; 

    for ($i = 0; $i < count($array); $i++)
        echo $array[$i]." "; */
?> 


    <script src="home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html> 
    