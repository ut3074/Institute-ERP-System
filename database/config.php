<?php
$con=new mysqli('localhost','root','','frontendbackend');
if(!$con)
{
?>
<script language="javascript">
alert ("unable to connect");
</script>
<?php
}
?>