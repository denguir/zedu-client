<div class="row">

	<div class="col-md-6 col-xs-12">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Personnel</h3>
			</div>
			<div class="panel-body">
				<dl>
					<dt>Commune de naissance</dt>
					<dd>{$eleve.commNaissance|default:'&nbsp;'}</dd>
					<dt>Classe</dt>
					<dd>{$eleve.groupe} {if $titulaires} [{", "|implode:$titulaires}]{/if}</dd>
					<dt>Date de naissance</dt>
					<dd>{$eleve.DateNaiss}
						<small>[Âge approx. {$eleve.age.Y} ans {if !($eleve.age.m == 0)}{$eleve.age.m} mois{/if}
			  {if !($eleve.age.d == 0)}{$eleve.age.d} jour(s){/if}]</small></dd>
					<dt>Sexe</dt>
					<dd>{$eleve.sexe}</dd>
				</dl>
			</div>

		</div>

	</div>
	<!-- col-md-... -->

	<div class="col-md-6 col-xs-12">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Localisation</h3>
			</div>
			<div class="panel-body">

				<dl>
					<dt>Adresse</dt>
					<dd>{$eleve.adresseEleve}</dd>
					<dt>Code Postal</dt>
					<dd>{$eleve.cpostEleve}</dd>
					<dt>Commune</dt>
					<dd>{$eleve.localiteEleve}</dd>
				</dl>
			</div>

		</div>

	</div>
	<!-- col-md-... -->

</div>
<!-- row -->
