<?php
$svgLoupe = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 250.313 250.313">
            <g id="Search">
                <path d="M244.186,214.604l-54.379-54.378c-0.289-0.289-0.628-0.491-0.93-0.76
                    c10.7-16.231,16.945-35.66,16.945-56.554C205.822,46.075,159.747,0,102.911,0S0,46.075,0,102.911
                    c0,56.835,46.074,102.911,102.91,102.911c20.895,0,40.323-6.245,56.554-16.945c0.269,0.301,0.47,0.64,0.759,0.929l54.38,54.38
                    c8.169,8.168,21.413,8.168,29.583,0C252.354,236.017,252.354,222.773,244.186,214.604z M102.911,170.146
                    c-37.134,0-67.236-30.102-67.236-67.235c0-37.134,30.103-67.236,67.236-67.236c37.132,0,67.235,30.103,67.235,67.236
                    C170.146,140.044,140.043,170.146,102.911,170.146z"/>
            </g>
            </svg>';
$svgLogin = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" xml:space="preserve"><g>
		<path d="M131.5,472H60.693c-8.538,0-13.689-4.765-15.999-7.606c-3.988-4.906-5.533-11.29-4.236-17.519
			c20.769-99.761,108.809-172.616,210.445-174.98c1.693,0.063,3.39,0.105,5.097,0.105c1.722,0,3.434-0.043,5.142-0.107
			c24.853,0.567,49.129,5.24,72.236,13.917c10.34,3.885,21.871-1.352,25.754-11.693c3.883-10.34-1.352-21.871-11.693-25.754
			c-3.311-1.244-6.645-2.408-9.995-3.512C370.545,220.021,392,180.469,392,136C392,61.01,330.991,0,256,0
			c-74.991,0-136,61.01-136,136c0,44.509,21.492,84.092,54.643,108.918c-30.371,9.998-58.871,25.546-83.813,46.062
			c-45.732,37.617-77.529,90.086-89.532,147.743c-3.762,18.066,0.744,36.622,12.363,50.908C25.221,503.847,42.364,512,60.693,512
			H131.5c11.046,0,20-8.954,20-20C151.5,480.954,142.546,472,131.5,472z M160,136c0-52.935,43.065-96,96-96s96,43.065,96,96
			c0,51.367-40.554,93.438-91.326,95.885c-1.557-0.028-3.114-0.052-4.674-0.052c-1.564,0-3.127,0.023-4.689,0.051
			C200.546,229.43,160,187.362,160,136z"/>
		<path d="M496.689,344.607c-8.561-19.15-27.845-31.558-49.176-31.607h-62.372c-0.045,0-0.087,0-0.133,0
			c-22.5,0-42.13,13.26-50.029,33.807c-1.051,2.734-2.336,6.178-3.677,10.193H200.356c-5.407,0-10.583,2.189-14.35,6.068
			l-34.356,35.388c-7.567,7.794-7.529,20.203,0.085,27.95l35,35.612c3.76,3.826,8.9,5.981,14.264,5.981h65c11.046,0,20-8.954,20-20
			c0-11.046-8.954-20-20-20h-56.614l-15.428-15.698L208.814,397h137.491c9.214,0,17.235-6.295,19.426-15.244
			c1.618-6.607,3.648-12.959,6.584-20.596c1.936-5.036,6.798-8.16,12.741-8.16c0.013,0,0.026,0,0.039,0h62.371
			c5.656,0.013,10.524,3.053,12.705,7.932c5.369,12.012,11.78,30.608,11.828,50.986c0.048,20.529-6.356,39.551-11.739,51.894
			c-2.17,4.978-7.079,8.188-12.56,8.188c-0.011,0-0.022,0-0.033,0h-63.125c-5.533-0.013-10.716-3.573-12.896-8.858
			c-2.339-5.671-4.366-12.146-6.197-19.797c-2.571-10.742-13.367-17.366-24.105-14.796c-10.743,2.571-17.367,13.364-14.796,24.106
			c2.321,9.699,4.978,18.118,8.121,25.738c8.399,20.364,27.939,33.555,49.827,33.606h63.125c0.043,0,0.083,0,0.126,0
			c21.351-0.001,40.647-12.63,49.18-32.201c6.912-15.851,15.137-40.511,15.072-67.975
			C511.935,384.434,503.638,360.153,496.689,344.607z"/>
		<circle cx="431" cy="412" r="20"/></g></svg>';
?>

<nav>
    <div>
        <img id="logo" src="View/assets/logo.png">
    </div>
    <div id="menu">
		<form id="formMenu">
			<div id="icone-man">
				<?php echo $svgLogin ?>
			</div>
			<div id="input-rechercher" >
				<input type="text" placeholder="Rechercher..">
				<button id="button-search" type="submit">
					<?php echo $svgLoupe ?>
				</button>
			</div>
		</form>
       <div class="separation"></div>
       
        <ul>
            <li><a href="">Accueil</a></li>
            <li><a href="?page=client&action=listeClient">Annuaire Client</a>
                <ul>
                    <li><a href="#">Ajouter un client</a></li>
                    <li><a href="#">Modifier un client </a></li>
                </ul>
            </li>
            <li><a href="?page=produit&action=listeProduit">Liste Produit</a>
                <ul>
                    <li><a href="#">Ajouter un produit</a></li>
                    <li><a href="#">Modifier un produit </a></li>
                </ul>
            </li>
			<li><a href="#">Devis</a>
				<ul>
					<li><a href="#">Nouveau devis</a></li>
					<li><a href="#">Modifier devis</a></li>
				</ul>
			</li>

			<li><a href="#">Facture</a>
				<ul>
					<li><a href="#">Nouvelle facture</a></li>
					<li><a href="#">Modifier facture</a></li>
				</ul>
			</li>
			<li><a href="#">Bon de livraison</a></li>
    	</ul>
	</div>
</nav>