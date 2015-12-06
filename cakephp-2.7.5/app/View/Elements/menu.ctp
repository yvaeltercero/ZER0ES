<nav id=menu_wrapper_visible class="navbar navbar-default navbar-fixed-top">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="<?php echo $this->Html->url(array('controller' => 'pages','action'=>'display'));?>"> ZER0ES </a>	 
	</div>
	<div id="navbar" class="navbar-collapse collapse">
	  <ul class="nav navbar-nav">
		<li><a href="<?php echo $this->Html->url(array('controller' => 'pages','action'=>'display'));?>">Home</a></li>	
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
		  <ul class="dropdown-menu">
			<li><a href="<?php echo $this->Html->url(array('controller' => 'users','action'=>'index'));?>">Mostrar</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="<?php echo $this->Html->url(array('controller' => 'users','action'=>'add'));?>">Agregar</a></li>
		  </ul>
		</li>
		<li><a href="<?php echo $this->Html->url(array('controller' => 'users','action'=>'logout'));?>">Logout</a></li>
	  </ul>  
	  <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
	</div>
  </div>
</nav> 