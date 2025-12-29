<div style="max-width:600px;background:#ffffff;border-radius:8px;
            box-shadow:0 4px 8px rgba(0,0,0,0.1);font-family:Arial,Helvetica,sans-serif;">

    <!-- Header -->
    <div style="background:linear-gradient(135deg, #04228e, #04228e);color:#ffffff;
                padding:5px;text-align:center;border-top-left-radius:8px;
                border-top-right-radius:8px;">
        <h2 style="margin:0;font-size:22px;">inquiry form</h2>
    </div>

    <!-- Content -->
    <div style="padding:10px;color:#333333;line-height:1.6;font-size:15px;">
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone:</strong> {{ $data['number'] }}</p>
        <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
        <hr style="margin:20px 0;border:none;border-top:1px solid #ddd;">
        <p><strong>Description:</strong>{{ $data['message'] }}</p>
        {{-- <div style="text-align:center;margin-top:20px;">
            <a href="mailto:{{ $data['email'] }}" style="display:inline-block;padding:10px 20px;background:#04228E;
                      color:#ffffff;text-decoration:none;border-radius:5px;
                      font-weight:bold;">
                Reply to {{ $data['name'] }}
            </a>
        </div> --}}
    </div>

    <!-- Footer -->
    <div style="background:#f1f1f1;padding:15px;text-align:center;font-size:13px;
                color:#555555;border-bottom-left-radius:8px;border-bottom-right-radius:8px;">
        {{-- ©{{ date('Y') }}  --}}
        Acoustic Arts Pvt. Ltd. All Rights Reserved.
    </div>
</div>