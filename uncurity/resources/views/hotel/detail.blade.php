<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button ng-click="view()" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				<h4 class="modal-title" id="myModalLabel">@lang('app.detail_title')</h4>
			</div>
			<div class="modal-body">
				<form name="frmentity" class="form-horizontal" novalidate="">
					<div class="form-group" ng-class="{'has-error':errors.name}">
						<label for="inputName" class="col-sm-3 control-label">@lang('app.name')</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="[[item.name]]" 
							ng-model="item.name" ng-minlength="2" ng-required="true" required>
							<span class="help-inline" 
							ng-show="frmentity.name.$invalid && frmentity.name.$touched">@lang('app.name') @lang('app.required_field')</span>
							<span ng-repeat="error in errors.name" class="help-block">
								<strong>[[error]]</strong>
							</span>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="btn-save" ng-click="save(true)" ng-disabled="frmentity.$invalid">@lang('app.save_close')</button>
				<button type="button" class="btn btn-primary" id="btn-save" ng-click="save()" ng-disabled="frmentity.$invalid">@lang('app.save')</button>
			</div>
		</div>
	</div>
</div>
