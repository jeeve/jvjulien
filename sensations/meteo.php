<?php	

		$lines = file('http://www.weatherlink.com/user/troislacs/index.php?view=summary&amp;headers=1');
		
		?>
		<table id="meteo">
			<tr>
				<td><p>Vitesse du vent </p></td>
				<td><p><?php echo substr($lines[251], 39, 44); ?></p></td>
			</tr>
			<tr>
				<td><p>Température de l'air </p></td>
				<td><p><?php echo substr($lines[143], 39, 44); ?></p></td>
			</tr>
			<tr>
				<td><p>Température de l'eau </p></td>
				<td><p><?php echo substr($lines[160], 39, 44); ?></p></td>
			</tr>			
		</table>		
