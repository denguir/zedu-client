<select name="cours" id="cours">
	<option value="">Choisir un cours</option>
	{foreach from=$listeCoursComp key=leCours item=unCours}
	<option value="{$leCours}"{if isset($cours) && ($leCours == $cours)} selected="selected"{/if}>
		{$unCours.libelle} {$unCours.statut} {$unCours.nbheures}h [{$leCours}]</option>
	{/foreach}
</select>

<script type="text/javascript">

	$("#cours").change(function(){
		if ($(this).val() != '')
			$("#formSelecteur").submit();
		})

</script>
