<!DOCTYPE html>
<html>
<head>
    <title class="title">
	@yield('title', "Problem #3&#8212;Developer's Best Friend")
    </title>
    <meta charset="utf-8">
    <link href="/p3.css"  rel="stylesheet" > 

    @yield('head')
</head>

<body>

<div class="container">

    <header class="title">
	<img src="/developer.png" alt="Developer's Best Friend" >
	<br>
	<p class="logo">Logo made by <a href="http://logotypemaker.com" title="Free Logo Maker">LogotypeMaker.com</a> | licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></p>
    </header>

   <nav>
        <ul>
            <li><a href='/'>Home&#8212;Data Generator</a></li>
        </ul>
    </nav>

<section>
        @yield('content')
</section>

<section>
        @yield('user')
</section>
<br>


<footer class="footer">
	Felice Gardner &copy; {{ date('Y') }}
</footer>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	@yield('body')

</body>
</html>
