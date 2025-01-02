@extends('layouts.main')


@section('content')
    <div class="top-banner">
        <img src="{{ asset('banner/environment.webp') }}"
            class="img-fluid" alt="">
            <h1>Environment, Health and  Safety Policy</h1>
    </div>
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('environment') }}">Mankind Pharma Environmental Policy </a>
                </li>
            </ol>
        </nav>
        <div>
            <h2 class="display-4 fw-bold">Environment policy</h2>
            <p>We have adopted an EHS and sustainability policy that is aimed at complying with legislative requirements,
                requirements of our licenses, approvals, various certifications and ensuring the safety of our employees and
                the personnel working at our facilities or under our management. Most of our manufacturing facilities are
                ISO 14001:2015 (Environmental Management Systems) and 45001:2018 (Occupational Health & Safety Management
                Systems) certified.</p>
            <h2 class="display-4 fw-bold">Environmental Matters</h2>
            <p>We are subject to extensive environmental laws and regulations, including regulations relating to the
                prevention and control of water pollution and air pollution, environmental protection, hazardous waste
                management and noise pollution, in relation to our manufacturing plants and R&D centers. These laws and
                regulations govern the discharge, emission, storage, handling and disposal of a variety of substances that
                may be used in or result from our operations. </p>
            <h2 class="display-4 fw-bold">Health and Safety</h2>
            <p>We estimate that accidents and occupational health hazards can be significantly reduced through a systematic
                analysis and control of risks and by providing appropriate training to our management, employees and
                contractors. </p>
            <p>
                We aim to continually improve our health and safety management system and its performance by setting
                documented objectives and targets of occupational health and safety aspects. We seek to identify the hazards
                and occupational health risks that our operations are exposed to, and subsequently implement preventive
                measures through a combination of technical, organizational and personal safety measures. We carry out
                facility-level risk assessments that are periodically updated. We conduct training and awareness programs
                for occupational health and safety of employees and carry out safety audits, review meetings by the central
                safety committee and periodic employee safety meetings.
            </p>
        </div>
    </div>
@endsection
