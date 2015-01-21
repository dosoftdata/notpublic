<?php
print'
		<div class="item">
			<div class="list-left">Pick up location:</div>
			<div class="list-right">
				<span>'.$result['incountry'].'<span><br />
                <span>'.$result['incity'].'<span>-
                <span>'.$result['addressrefin'].'<span><br />
                
                </div>
			<div class="clear"></div>
		</div>					
		
		<div class="item">
			<div class="list-left">Drop up location</div>
			<div class="list-right">
                 <span>'.$result['outcountry'].'<span><br />
                <span>'.$result['outcity'].'<span>-
                <span>'.$result['addressrefout'].'<span>					
			</div>
			<div class="clear"></div>
		</div>									
	
		<div class="item">
			<div class="list-left">Available Dates:</div>
			<div class="list-right">
                '.self::freightposteddate($result['stayform']).'	
                
				'.self::freightposteddate(Util::matchdateinput($result['altdatetime'],$result['beforedate'],$result['stayto'])).'			</div>
			<div class="clear"></div>
		</div>
        ';
?>