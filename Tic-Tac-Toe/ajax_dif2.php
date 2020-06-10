    <?php
		include '../connect.php';
		$db = OpenCon();
		
		
		$query = "select * from quiz where Game = 'T' and Diff = 2 order by IDQ";
		$result = mysqli_query($db, $query);

		// Fetch each row in an associative array
		print '<form action="grade.php" method="post" id="quiz" style="float:left; width:60%; padding:0 20px;">
				<ol>';
		$i = 1;
		while($row = mysqli_fetch_array($result)) {
			extract($row);

			
			print '<li>';
				
			print '<h3>' . htmlentities($row[4], ENT_QUOTES) . '</h3>';

			$querya = "select * from questions where IDQ = '". htmlentities($row[3], ENT_QUOTES) ."' order by AnswerLetter";
			$resulta = mysqli_query($db, $querya);
			while($rowa = mysqli_fetch_array($resulta)) {
				extract($rowa);
				print '<div>';
				print '<input type="radio" name="question-'.$i.'-answers" id="question-'.$i.'-answers-'. htmlentities($rowa[2], ENT_QUOTES) .'" value="'. htmlentities($rowa[2], ENT_QUOTES).'" />
                        <label for="question-'.$i.'-answers-'. htmlentities($rowa[2], ENT_QUOTES).'">';
				print ' ' . htmlentities($rowa[2], ENT_QUOTES);
				print ') ' . htmlentities($rowa[3], ENT_QUOTES) . '</label>';
				
				print '</div>';
				
			}
		    print '	</li>';
			$i = $i + 1;
		}

		print '</ol>
            
            <input type="submit" value="Submit Quiz" />
		
		</form>';
		?>