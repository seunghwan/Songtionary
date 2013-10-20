<?php 
	require_once ("includes/connect.php"); 


	if($_REQUEST['mode']){
		if($_REQUEST['mode']=="add"){ //add
			$word = $_REQUEST['word'];
			$content = $_REQUEST['content'];
			$sound = $_REQUEST['sound'];

			$query = "INSERT INTO definitions (word, content, sound) VALUES ($word, $content, $sound)";
			mysqli_query($conn, $query);
		}else{ //delete
			$target = $_REQUEST['no'];
			$query = "DELETE FROM definitions WHERE id=$target";
			mysqli_query($conn, $query);
		}
	}

	$query = "SELECT * FROM definitions ORDER BY word";
	$result = mysqli_query($conn, $query);

?>
<form method="post" action="edit.php?mode=add">
	단어: <input type="text" id="word" placeholder="송똑똑" /><br />
	발음: <input type="text" id="sound" placeholder="송:똑똑" /><br />
	정의 <textarea placeholder="무슨 뜻? html tag 쓸 수 있음. injection체크 때로 안하니 script태그같은거 쓰기 없긔"></textarea>
	<input type="submit" value="등록" />
</form>

<table>
	<tr>
		<td>항목명</td>
		<td>발음</td>
		<td>정의</td>
	</tr>
<?
	while($row = mysqli_fetch_array($result)){
?>
		<tr>
			<td>
				<?=$row['word']?>
			</td>
			<td>
				<?=$row['sound']?>
			</td>
			<td>
				<?=$row['content']?>
			</td>
		</tr>
<?
	}
?>
</table>

<?
	
?>