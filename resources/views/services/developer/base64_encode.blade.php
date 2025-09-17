@extends('users.layout.main')

@section('content')

<style>

    .converter-container {
        margin: auto;
        max-width: 700px;
        margin-top: 50px;
        margin-bottom: 50px;
        background: #fff;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
        border-radius: 15px;
        padding: 30px;
    }

    .btn-switch {
        border-radius: 30px;
        margin-right: 10px;
        padding: 8px 25px;
        transition: background 0.3s;
    }

    .btn-switch.active {
        background-color: #0d6efd;
        color: #fff;
    }

    .btn-switch.inactive {
        background-color: #e9ecef;
        color: #000;
    }

    textarea {
        resize: vertical;
        min-height: 120px !important;
    }

    .convert-btn {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        margin-top: 10px;
    }

    .form-label {
        font-weight: 500;
    }
    .output-box-container {
    display: flex;
    align-items: stretch;
    border: 1px solid #ced4da;
    border-radius: 8px;
    background-color: #ffffff;
    overflow: hidden;
    min-height: 50px;
}

.output-box {
    flex: 1;
    padding: 12px;
    font-size: 15px;
    color: #212529;
    white-space: pre-wrap;
    overflow-y: auto;
}

.copy-btn {
    background-color: #f8f9fa;
    border-left: 1px solid #ced4da;
    padding: 0 16px;
    display: flex;
    align-items: center;
    font-size: 14px;
    font-weight: 500;
    color: #000;
    transition: background-color 0.3s;
    white-space: nowrap;
}

.copy-btn:hover {
    background-color: #e2e6ea;
}

  </style>

<div class="converter-container">
  <div class="text-center mb-4">
    <button id="btnEncode" class="btn btn-switch active">Encode Base64</button>
    <a href="{{ route('base64_decode') }}" id="btnDecode" class="btn btn-switch inactive">Decode Base64</a>
  </div>
  <form id="encodeForm">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="mb-3">
      <label for="inputText" class="form-label">Input Text</label>
      <textarea class="form-control" name="input" id="inputText" placeholder="Enter text here..."></textarea>
    </div>

    <button type="submit" id="convertBtn" class="btn btn-primary convert-btn">Encode</button>
  </form>
  <div class="mt-4">
    <label for="outputText" class="form-label">Output Text</label>
    <div class="output-box-container">
      <div id="outputText" class="output-box"></div>
      <button type="button" id="copyOutputBtn" class="btn btn-primary mb-0 rounded"><i class="fas fa-copy"></i> Copy</button>
      
    </div>
  </div>
</div>
<script>
  $('#encodeForm').submit(function(event) {
        event.preventDefault();
        $('#outputText').text('');
        var inputText = $('#inputText').val().trim();

        if (inputText === '') {
            return;
        }
        $('#convertBtn').prop('disabled', true);

        var formData = $(this).serialize();
        

        $.ajax({
            url: "{{ route('encodebase64') }}",
            type: "POST",
            data: formData,
            success: function(response) {
              $('#convertBtn').prop('disabled', false);
                if (response.status === 0) {
                  $('#outputText').text(response.output);
                } else {
                    $('#alert_message').text(response.message);
                }
            },
            error: function(xhr) {
                $('#convertBtn').prop('disabled', false);
            }
        });
    });
</script>

@endsection