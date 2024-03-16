<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>dmnbc consulting start static page on aws amplify</title>
	<style>
		#logo{ float:right;}
		p{ clear:right;	}
	</style>
   
</head>
	
<body>
    <script>var text = "akzeptiert"</script>
	<img id="logo" src="logo.svg" alt="Logo" width="150" height="90" >
	<h3>Diese Testseite für AWS Kurs</h3>
        Auf dieser Seite zeigt AWS Ihnen anschaulich die Möglichkeiten eines AWS Amplify Services mit einer github Integration.<br><br>Es werden dabei keine personenbezogenen Daten erfasst.
	<p> <a href="https://dmnb.consulting/Products.html">Produkte</a> </p>
	<p> <a href="https://dmnb.consulting/impressum.html">Impressum</a> </p>
	<p> <a href="https://dmnb.consulting/datenschutz.html">Datenschutzhinweise</a> </p>
	<button id ="acc" > default  </button> 
</body>
 <script> 
 	document.addEventListener('DOMContentLoaded', (event) => {
    // Select the button by its ID
    const button = document.getElementById('acc');

    // Check if the button exists to prevent errors
    if (button) {
        // Update the button's text value
        button.value = 'Updated Value';
        button.textContent = 'Updated Value'; // Use textContent for visible text inside the button
    }
});
 	
 	
 	</script>
</html>
