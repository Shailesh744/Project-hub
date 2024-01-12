<?php
// session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>code generator</title>
		<link href="codegen.css" rel="stylesheet" type="text/css">
	</head>
        <?php
        $userprofile = $_SESSION['user_name'];
        if($userprofile == true)
        {

        }
        else{
                header('location:login.php');
        }
        ?>
	<body>
        <div class="chat-ai"></div>
        <script src="ChatAI.js"></script>
        <script>
        // Create a new ChatAI instance
        new ChatAI({
    container: '.chat-ai',
    api_key: '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',
    model: 'gpt-3.5-turbo'
});
        </script>
	</body>
</html>