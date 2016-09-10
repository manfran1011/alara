<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>	Larevel</title>
	<link rel="stylesheet" href="	">
</head>
<body>
	<h2>	Notes</h2>
<ul>
	@foreach($notes as $note)
	<li>
		{{ $note->note }}
	</li>
	@endforeach
</ul>


	<form method="POST" >
		<input type="hidden" name="_token" value="{{ csrf_token()}}" placeholder="">
		<textarea name="note"></textarea>
		<button type="submit">Create note</button>
	</form>
</body>
</html>
