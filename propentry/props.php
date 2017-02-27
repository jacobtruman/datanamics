			<?php
				$ptypeArr = array('Hotspot', 'Windemere Hotel', 'Best Western', 'Biltmore', 'Brookwood Inn', 'Candlewood Suites', 'Casa Linda Inn', 'Comfort Inn', 'Conrad', 'Crowne Plaza', 'Cypress Gardens Inn', 'Days Inn', 'Doubletree', 'Embassy Suites', 'Fairfield Inn', 'Keswick Hall', 'Guest House International', 'Hampton Inn', 'Hampton Inn & Suites', 'Hawthorn Suites', 'Heathman Lodge', 'Hilton', 'Hilton Suites', 'Hilton Garden Inn', 'Holiday Inn', 'Holiday Inn Express', 'Homestead Suites', 'Homewood Suites', 'Hotel Grand', 'Howard Johnson Inn', 'Hunters Ridge', 'Kiawah Golf Resort', 'Leisure Hotel', 'Pacific Inn', 'Peabody', 'Quality Inn', 'Radisson', 'Ramada Inn', 'Ramada Limited', 'Red Lion', 'Sheraton Four Points', 'Shoneys Inn', 'Sleep Inn', 'SpringHill Suites', 'Super 8', 'Terraces', 'Thunderbird', 'TownePlace Suites', 'Walnut Knolls', 'Westin', 'Westmont Inn', 'Willow Valley', 'Wyndham Garden', 'Truman Hotel', 'Colony Woods Apartments', 'The Platinum', 'The Lodge', 'Pear Tree Inn', 'Marriott', 'St. Petersburg Clearwater Airport Hotel', 'Comfort Inn & Suites', 'Comfort Suites', 'Treasure Bay Hotel & Marina');
				sort($ptypeArr);
			?>
			<select size='1' name='htype' CLASS='formfield'>
				<?php
					if(empty($_REQUEST['htype'])){
						echo "<option value='".$htype."' selected>".$htype."</option>\n";
					}else{
						echo "<option value='".$_REQUEST['htype']."' selected>".$_REQUEST['htype']."</option>\n";
					}
					for ($i = 0; $i < count($ptypeArr); $i++){
						echo "<option value='".$ptypeArr[$i]."'>".$ptypeArr[$i]."</option>\n";
					}
				?>
			</select>