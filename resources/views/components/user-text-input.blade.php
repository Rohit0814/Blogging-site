<div class="{{ $divClassName }}" style="display: flex; align-items:center">
    <input type="{{ $inputType }}" class="form-control" name="{{ $inputName }}" value="{{ old($inputName) }}"
        placeholder="{{ $labelName }}"><br>
    <div style="color:red;font-weight:bolder">
        @error('{{ $inputName }}')
            {{ $message }}
        @enderror
    </div>
</div>
