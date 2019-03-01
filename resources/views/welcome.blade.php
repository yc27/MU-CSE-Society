<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CSE SOCIETY</title>

    <!-- style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js "></script>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:100,600">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed|Open+Sans:400,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,700">
</head>

<body>
    <div class="side-bar" id="Side-bar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeSideBar()">&lAarr;</a>

        <div class="side-menu">
            <a href="#Home" style="border:0; margin-top: 70px;">
                <img src="img/logo.png" alt="logo" class="menu-icon"> </a>
            <a href="#About"> About Us </a>
            <a href="#News"> News </a>
            <a href="#Events"> Events </a>
            <a href="#Gallery"> Gallery </a>
            <a href="#Committee"> Committee </a>
            <a href="#Contact"> Contact Us </a>
            <a href="{{ route('login') }}"> Admin Login </a>
        </div>
    </div>
    <a href="javascript:void(0);" class="openbtn" onclick="openSideBar()"> &rAarr; </a>

    <div class="nav-bar" id="Nav-bar">
        <a href="#Home" style="padding-top:1vh"> <img src="img/logo.png" alt="logo" class="menu-icon"> </a>

        <a href="#About" class="abt"> About Us
            <span class="vertical-bar"> &nbsp; </span> </a>

        <a href="#News" class="nws"> News
            <span class="vertical-bar"> &nbsp; </span> </a>

        <a href="#Events" class="evnt"> Events
            <span class="vertical-bar"> &nbsp; </span> </a>

        <a href="#Gallery" class="glry"> Gallery
            <span class="vertical-bar"> &nbsp; </span> </a>

        <a href="#Committee" class="cmte"> Committee
            <span class="vertical-bar"> &nbsp; </span> </a>

        <a href="#Contact" class="cntct"> Contact Us
            <span class="vertical-bar"> &nbsp; </span> </a>

        <a href="{{ route('login') }}"> Admin Login </a>
    </div>

    <div class="banner" id="Home">
        <img src="img/banner.jpg" alt="banner">
        <h6 class="banner-text"> CSE SOCIETY
            <br>
            <font size="4vh" font-weight="normal"> Metropolitan University </font>
        </h6>
    </div>

    <div class="block-center position-ref content">
        <div id="News">
            <p class="heading"> News </p>

            <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec venenatis nisi. Vivamus dolor libero, maximus eget egestas in, feugiat at odio. In vehicula lorem ut nisl laoreet, vitae facilisis libero dictum. Ut id eros nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam arcu sem, viverra eget est a, faucibus pulvinar massa. Integer sagittis finibus nisl, ut tempor tellus. Quisque vehicula justo convallis, pulvinar erat vitae, eleifend quam. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id egestas mauris. Vivamus a lorem blandit, congue risus egestas, eleifend justo. Nam ullamcorper tortor eros.

                Proin elementum vestibulum felis, quis vehicula nibh egestas non. Nullam elementum nisl nunc, nec ultrices massa tincidunt ac. Donec at libero at ipsum faucibus tincidunt. Vestibulum non consequat orci, malesuada vehicula magna. Proin eget nulla volutpat erat condimentum tempor eget id libero. Ut et pulvinar augue. Phasellus mollis libero at nulla blandit, non tincidunt tortor ultricies. Curabitur risus sem, ornare sit amet augue vel, bibendum lobortis nulla. Proin sit amet urna massa. Nullam vel mi at nisi convallis feugiat. Donec a mollis massa.</p>
        </div>

        <div id="Events" class="bg-ash">
            <p class="heading"> Events </p>

            <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec venenatis nisi. Vivamus dolor libero, maximus eget egestas in, feugiat at odio. In vehicula lorem ut nisl laoreet, vitae facilisis libero dictum. Ut id eros nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam arcu sem, viverra eget est a, faucibus pulvinar massa. Integer sagittis finibus nisl, ut tempor tellus. Quisque vehicula justo convallis, pulvinar erat vitae, eleifend quam. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id egestas mauris. Vivamus a lorem blandit, congue risus egestas, eleifend justo. Nam ullamcorper tortor eros.

                Proin elementum vestibulum felis, quis vehicula nibh egestas non. Nullam elementum nisl nunc, nec ultrices massa tincidunt ac. Donec at libero at ipsum faucibus tincidunt. Vestibulum non consequat orci, malesuada vehicula magna. Proin eget nulla volutpat erat condimentum tempor eget id libero. Ut et pulvinar augue. Phasellus mollis libero at nulla blandit, non tincidunt tortor ultricies. Curabitur risus sem, ornare sit amet augue vel, bibendum lobortis nulla. Proin sit amet urna massa. Nullam vel mi at nisi convallis feugiat. Donec a mollis massa.</p>
        </div>

        <div id="Gallery">
            <p class="heading"> Gallery </p>

            <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec venenatis nisi. Vivamus dolor libero, maximus eget egestas in, feugiat at odio. In vehicula lorem ut nisl laoreet, vitae facilisis libero dictum. Ut id eros nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam arcu sem, viverra eget est a, faucibus pulvinar massa. Integer sagittis finibus nisl, ut tempor tellus. Quisque vehicula justo convallis, pulvinar erat vitae, eleifend quam. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id egestas mauris. Vivamus a lorem blandit, congue risus egestas, eleifend justo. Nam ullamcorper tortor eros.

                Proin elementum vestibulum felis, quis vehicula nibh egestas non. Nullam elementum nisl nunc, nec ultrices massa tincidunt ac. Donec at libero at ipsum faucibus tincidunt. Vestibulum non consequat orci, malesuada vehicula magna. Proin eget nulla volutpat erat condimentum tempor eget id libero. Ut et pulvinar augue. Phasellus mollis libero at nulla blandit, non tincidunt tortor ultricies. Curabitur risus sem, ornare sit amet augue vel, bibendum lobortis nulla. Proin sit amet urna massa. Nullam vel mi at nisi convallis feugiat. Donec a mollis massa.</p>
        </div>

        <div id="Committee" class="bg-ash">
            <p class="heading"> Committee </p>

            <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec venenatis nisi. Vivamus dolor libero, maximus eget egestas in, feugiat at odio. In vehicula lorem ut nisl laoreet, vitae facilisis libero dictum. Ut id eros nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam arcu sem, viverra eget est a, faucibus pulvinar massa. Integer sagittis finibus nisl, ut tempor tellus. Quisque vehicula justo convallis, pulvinar erat vitae, eleifend quam. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id egestas mauris. Vivamus a lorem blandit, congue risus egestas, eleifend justo. Nam ullamcorper tortor eros.

                Proin elementum vestibulum felis, quis vehicula nibh egestas non. Nullam elementum nisl nunc, nec ultrices massa tincidunt ac. Donec at libero at ipsum faucibus tincidunt. Vestibulum non consequat orci, malesuada vehicula magna. Proin eget nulla volutpat erat condimentum tempor eget id libero. Ut et pulvinar augue. Phasellus mollis libero at nulla blandit, non tincidunt tortor ultricies. Curabitur risus sem, ornare sit amet augue vel, bibendum lobortis nulla. Proin sit amet urna massa. Nullam vel mi at nisi convallis feugiat. Donec a mollis massa.</p>
        </div>

        <div id="About">
            <p class="heading"> About </p>

            <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec venenatis nisi. Vivamus dolor libero, maximus eget egestas in, feugiat at odio. In vehicula lorem ut nisl laoreet, vitae facilisis libero dictum. Ut id eros nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam arcu sem, viverra eget est a, faucibus pulvinar massa. Integer sagittis finibus nisl, ut tempor tellus. Quisque vehicula justo convallis, pulvinar erat vitae, eleifend quam. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id egestas mauris. Vivamus a lorem blandit, congue risus egestas, eleifend justo. Nam ullamcorper tortor eros.

                Proin elementum vestibulum felis, quis vehicula nibh egestas non. Nullam elementum nisl nunc, nec ultrices massa tincidunt ac. Donec at libero at ipsum faucibus tincidunt. Vestibulum non consequat orci, malesuada vehicula magna. Proin eget nulla volutpat erat condimentum tempor eget id libero. Ut et pulvinar augue. Phasellus mollis libero at nulla blandit, non tincidunt tortor ultricies. Curabitur risus sem, ornare sit amet augue vel, bibendum lobortis nulla. Proin sit amet urna massa. Nullam vel mi at nisi convallis feugiat. Donec a mollis massa.</p>
        </div>

        <div id="Contact" class="bg-sky row">
            <p class="heading" style="color:white"> Contact Us </p>

            <div class="column adrs">
                <h4>Address:</h4>
                <hr>
                <p>Metropolitan University, Sylhet, Bangladesh.</p>
                <p><strong>City Campus:</strong> Alhmara Shopping City, Zindabazar, Sylhet.</p>
                <p><strong>Parmanent Campus:</strong> Boteshwar, Khadim Nogor, Sylhet.</p>

                <h4>Contact No: +88-01000000000</h4>
            </div>

            <div class="column msg">
                <h4>Send Message:</h4>
                <hr>
                <form action="/sendmsg" method="POST">
                    {{ csrf_field() }}
                    <table style=" width: 100%">
                        <tr>
                            <td style="font-size: 18px;"> Name* </td>
                            <td><input type="text" name="name" required placeholder="Your name" maxlength="100" style="font-size: 16px;"></td>
                        </tr>

                        <tr>
                            <td style="font-size: 18px;"> Email* </td>
                            <td><input type="email" name="email" required placeholder="email@example.com" style="font-size:16px;"></td>
                        </tr>

                        <tr>
                            <td for="message" style="font-size: 18px;"> Message* </td>
                            <td><textarea id="comment" name="message" required placeholder="Write your message.." maxlength="500" style="font-size: 16px;"></textarea></td>
                        </tr>

                        <tr>
                            <td><input type="submit" name="submit" value="Submit"></td>
                        </tr>
                    </table>
                </form>
                @if (session('status'))
                <div class="msg-success">
                    {{ session('status') }}
                </div>
                @endif
            </div>
        </div>

        <div class="footer bg-blue">
            <p> &copy; 2019 CSE Society, Metropolitan University All Rights Reserved.</p>
        </div>
    </div>

    <!-- script -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html> 