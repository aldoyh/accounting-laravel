<?php

use Illuminate\Support\Facades\Crypt;

/*
|
| Verify Email View
|
*/

?>
<div class="col-md-6">
    <div class="form-group">
        <label for="email" class="control-label">Verification Email</label>
        <div class="input-group">
            <input type="text" class="form-control" id="email" name="email" value="{{ $email }}">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#verifyEmailModal">
                    {{ trans('auth.verify') }}
                </button>
            </span>
        </div>
    </div>
</div
