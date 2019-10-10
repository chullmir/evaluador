		<!--  --- WEB ---  -->
		<?php if (!empty($_SESSION['web'])): ?>
		<h3>Web</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->web)) { ?>
			 		<li><a href="#"><?php $data[$key]->name." ".$data[$key]->apellido ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN WEB ---  -->

		<!--  --- produccionTN ---  -->
		<?php if (!empty($_SESSION['produccionTn'])): ?>
		<h3>Produccion TN</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->produccionTn)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN produccionTN ---  -->

		<!--  --- programasTn ---  -->
		<?php if (!empty($_SESSION['programasTn'])): ?>
		<h3>Programas TN</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->programasTn)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN programasTn ---  -->

		<!--  --- arribaArgentinos ---  -->
		<?php if (!empty($_SESSION['arribaArgentinos'])): ?>
		<h3>Arriba Argentinos</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->arribaArgentinos)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN arribaArgentinos ---  -->

		<!--  --- noti13 ---  -->
		<?php if (!empty($_SESSION['noti13'])): ?>
		<h3>Noti 13</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->noti13)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN noti13 ---  -->

		<!--  --- telenoche ---  -->
		<?php if (!empty($_SESSION['telenoche'])): ?>
		<h3>Telenoche</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->telenoche)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN telenoche ---  -->

		<!--  --- sintesis ---  -->
		<?php if (!empty($_SESSION['sintesis'])): ?>
		<h3>Sintesis</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->sintesis)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN sintesis ---  -->

		<!--  --- cronista ---  -->
		<?php if (!empty($_SESSION['cronista'])): ?>
		<h3>Cronista</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->cronista)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN cronista ---  -->

		<!--  --- conduColum ---  -->
		<?php if (!empty($_SESSION['conduColum'])): ?>
		<h3>Conductores y Columnistas</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->conduColum)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN conduColum ---  -->

		<!--  --- deportes ---  -->
		<?php if (!empty($_SESSION['deportes'])): ?>
		<h3>Deportes</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->deportes)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN deportes ---  -->

		<!--  --- prodEsp ---  -->
		<?php if (!empty($_SESSION['prodEsp'])): ?>
		<h3>Producciones Especiales</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->prodEsp)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN prodEsp ---  -->

		<!--  --- peJefes ---  -->
		<?php if (!empty($_SESSION['peJefes'])): ?>
		<h3>Productores Ejecutivos y Jefes</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->peJefes)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN peJefes ---  -->

		<!--  --- camaras ---  -->
		<?php if (!empty($_SESSION['camaras'])): ?>
		<h3>Cámaras</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->camaras)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN camaras ---  -->

		<!--  --- edicion ---  -->
		<?php if (!empty($_SESSION['edicion'])): ?>
		<h3>Edición</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->edicion)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN edicion ---  -->

		<!--  --- directores ---  -->
		<?php if (!empty($_SESSION['directores'])): ?>
		<h3>Directores</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->directores)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN directores ---  -->

		<!--  --- promociones ---  -->
		<?php if (!empty($_SESSION['promociones'])): ?>
		<h3>Promociones</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->promociones)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN promociones ---  -->

		<!--  --- archivo ---  -->
		<?php if (!empty($_SESSION['archivo'])): ?>
		<h3>Archivo</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->archivo)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN archivo ---  -->

		<!--  --- ingestaSat ---  -->
		<?php if (!empty($_SESSION['ingestaSat'])): ?>
		<h3>Ingesta / SAT</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->ingestaSat)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN ingestaSat ---  -->

		<!--  --- can ---  -->
		<?php if (!empty($_SESSION['can'])): ?>
		<h3>CAN</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->can)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN can ---  -->

		<!--  --- mesa ---  -->
		<?php if (!empty($_SESSION['mesa'])): ?>
		<h3>Mesa de Entrada</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->mesa)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN mesa ---  -->

		<!--  --- administracion ---  -->
		<?php if (!empty($_SESSION['administracion'])): ?>
		<h3>Administración</h3>
		<ul>
			<?php
			foreach ($data as $key => $value) {
			 	if (!empty($data[$key]->administracion)) { ?>
			 		<li><a href="#"><?= $data[$key]->name." ".$data[$key]->lastname ?></a></li>
			<?php } } ?>
		</ul>					
		<?php endif ?>
		<!--  --- FIN administracion ---  -->