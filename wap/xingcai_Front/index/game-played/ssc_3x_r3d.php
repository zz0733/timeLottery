<input type="hidden" name="playedGroup" value="<?= $this->groupId ?>" />
<input type="hidden" name="playedId" value="<?= $this->played ?>" />
<input type="hidden" name="type" value="<?= $this->type ?>" />
<div class="pp" action="tzSscWeiInput" length="3" random="sscRandom" style="width:100%">
	<div id="wei-shu" length="3" type="2x_r3d_zuhetouzhu" style="width:100%">
		<label><input type="checkbox" value="16"  />万</label>
		<label><input type="checkbox" value="8"  />千</label>
		<label><input type="checkbox" value="4"  />百</label>
		<label><input type="checkbox" value="2"  />十</label>
		<label><input type="checkbox" value="1"  />个</label>
        
       <span  line-height:200%; width:15% onclick="$('#wei-shu :checkbox').attr('checked', true);"></span>
	</div>
	<textarea id="textarea-code"></textarea>
</div>
<?php
$maxPl = $this->getPl($this->type, $this->played);
?>
<script type="text/javascript">
$(function(){
	gameSetPl(<?= json_encode($maxPl) ?>);
})
</script>
