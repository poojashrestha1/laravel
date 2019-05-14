@extends('master')
@yield('content')
<h1 id=#top></h1>
	<div class="banner"><img src="images/a.jpg" alt="banner"></div>
	<div class="menu">
		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#home">Contact</a></li>
			<li><a href="#home">About</a></li>
		</ul>
	</div>
	
	<div class="mid">
		<div class="content" >
			<div class="text">
				<div class="upper">
					<div class="uimage"> <img src="images/b.jpg" alt="mountain"></div>
					<div class="utext">A quick and simplified answer is that Lorem Ipsum refers to text that the DTP (Desktop Publishing) industry use as replacement text when the real text is not available. For example, when designing a brochure or book, a designer will insert Lorem ipsum text if the real text is not available. The Lorem ipsum text looks real enough that the brochure or book looks complete. The book or brochure can be shown to the client for approval. The important factor when using Lorem ipsum text is that the text looks realistic otherwise the brochure or book will not look very good. Lorem Ipsum is dummy text which has no meaning however looks very similar to real text.</div>
				</div>
				<div class="lower">
					<div class="rimg"><img src="images/c.jpg"></div>
					<div><img src="images/d.jpg"></div>
					<div><img src="images/e.jpg"></div>
				</div>
			</div>
		</div>
        <div class="sidebar">
	       <h1>Sidebar</h1>
	       <div class="scrollable">
					
				<div> <img src="images/f.jpg" alt="sidebar"/> 
					<div class="stext">
						A quick and simplified answer is that Lorem Ipsum refers to text that the DTP (Desktop Publishing) industry use as replacement text when the real text is not available. For example, when designing a brochure or book, a designer will insert Lorem ipsum text if the real text is not available. The Lorem ipsum text looks real enough that the brochure or book looks complete. The book or brochure can be shown to the client for approval. The important factor when using Lorem ipsum text is that the text looks realistic otherwise the brochure or book will not look very good. Lorem Ipsum is dummy text which has no meaning however looks very similar to real text
						A quick and simplified answer is that Lorem Ipsum refers to text that the DTP (Desktop Publishing) industry use as replacement text when the real text is not available. For example, when designing a brochure or book, a designer will insert Lorem ipsum text if the real text is not available. The Lorem ipsum text looks real enough that the brochure or book looks complete. The book or brochure can be shown to the client for approval. The important factor when using Lorem ipsum text is that the text looks realistic otherwise the brochure or book will not look very good. Lorem Ipsum is dummy text which has no meaning however looks very similar to real text
					</div>
				</div>
	        </div>
	    </div>
    </div> 


@yield('footer')
<div class="footer">
		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#home">Contact</a></li>
			<li><a href="#home">About</a></li>
		</ul>
		<a href="#top">Go to the top</a>
		<br/>	<br/>	
		<div>
				&copy;copyright 2018,poojashres7@gmail.com
		</div>
</div>