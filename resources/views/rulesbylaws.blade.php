@extends('templates.master')
@section('title', 'Members')
@section('main')
<link rel="stylesheet" href="{{ asset('css/activities.css') }}">

<div class="container">
        <h2 class="top-padding">Bylaws of the Malayan Colleges Laguna ACM Student Chapter</h2>
        <div class="top-padding mb-2"><a class="" href="docs/Bylaws-of-Malayan-Colleges-Laguna-ACM-Student-Chapter-rev.pdf">Download Bylaws (PDF)</a></div>

            <h4 id="article1">Article I: Name</h4>
            <ol>
                <li>
                    This organization shall be called the Malayan Colleges Laguna - ACM Student Chapter. In these Bylaws it is referred to as the Chapter; the Association for Computing Machinery is referred to as ACM.
                </li>
            </ol>
            <h4 id="article2">Article II: Purpose</h4>
            <ol>
                <li>
                    The Chapter is organized and will be operated exclusively for educational and scientific purposes to promote the increased knowledge of and greater interest in the science, design, development, construction, languages, management and applications of modern computing.
                </li>
                <li>
                    To train and develop its members to be well-versed computer programmers.
                </li>
                <li>
                    The Chapter will serve students of Malayan Colleges Laguna and its community for the purposes mentioned above.
                </li>
            </ol>
            <h4 id="article3">Article III: Memberships</h4>
            <ol>
                <li>
                    Membership in the Student Chapter shall be open to all ACM Members enrolled in any MCL degree programs as well as for non-ACM members but are taking IT-related degree programs in MCL. 
                </li>
                <li>
                    Voting membership in the Student Chapter shall be granted to all active Chapter members.
                </li>
                <li>
                    Membership shall not be restricted according to race, creed, age, gender, disability, nationality, sexual orientation, economic status, veteran status, or parenthood.
                </li>
            </ol>
            <h4 id="article4">Article IV: Officers</h4>
            <ol>
                <li>
                    The officers of this Chapter shall be: President, Vice President, and Treasurer. These individuals must be ACM Student Members. In addition, a Faculty Sponsor with an ACM Professional Membership is required. In addition, a Secretary will also be elected.
                </li>
                <li>
                    There will be four committees of this Chapter, namely: Finance Committee, Membership Committee, Publication Committee, and Research and Development Committee. Each committee will have its own Chairman.
                </li>
                <li>
                    The officers shall be elected by a plurality of votes cast at the annual election meeting or via electronic voting and serve for a minimum of one year.
                </li>
                <li>
                    Appointment or nomination of an individual to an officer position within an ACM Chapter shall be in general limited to three full consecutive terms in the same position. This recommendation is intended to encourage the continuing infusion of new volunteers into the organization and to encourage office holders to give thought to planning for their successor.
                </li>
            </ol>
            <h4 id="article5">Article V: Duties of Officers, Committees and Faculty Sponsor</h4>
            <ol>
                <li>
                    The President is the principal officer and is responsible for leading the Chapter and managing its activities in accordance with the policies and procedures of ACM and these bylaws.
                </li>
                <li>
                    The Vice President shall preside at meetings in the absence of the President, assist the President in the management of the Chapter, and perform other duties that may be assigned by the President.
                </li>
                <li>
                    The Secretary shall keep the minutes of all Chapter meetings. Other duties include:
                    <ol type="a">
                        <li>
                            Preparation of the Chapter’s annual report and officer contact information, and submission of these to ACM Headquarters via Chapter Administrative Interface.
                        </li>
                        <li>
                            Perform other duties as assigned by the President.
                        </li>
                    </ol>
                </li>
                <li>
                    The Finance Committee shall maintain the Chapter’s financial records. They will be in-charge of collecting the membership dues, paying all bills, and maintaining financial records for the Chapter.
                </li>
                <li>
                    The Membership Committee shall be in-charge of the recruitment and acceptance process on this Chapter. They will also be responsible in ensuring compliance to this by-laws by all members of this Chapter.
                </li>
                <li>
                    The Publication Committee shall be responsible for all the creation of announcements, designs, and other media related materials that will be used by this Chapter.
                </li>
                <li>
                    The Research and Development Committee will be in charge of the training and development of the members of this association especially in the field of software development.
                </li>
                <li>
                    The Faculty Sponsor shall be a full-time faculty member of Malayan Colleges Laguna. 
                    <ol type="a">
                        <li>
                            The Faculty Sponsor shall be generally responsible for the activities of the Chapter. Specifically, the Sponsor:
                            <ol type="I">
                                <li>
                                    Helps provide continuity from year to year as student leadership and personnel change
                                </li>
                                <li>
                                    Promotes good student-faculty relationships
                                </li>
                                <li>
                                    Helps maintain university standards in all activities of the Chapter
                                </li>
                                <li>
                                    Exercises financial supervision, if necessary, by promoting prompt payment of bills and collection of dues, and overseeing the settlement of all accounts in the event of dissolution of the Chapter
                                </li>
                                <li>
                                    Represents the Chapter interests to the faculty and administration
                                </li>
                                <li>
                                    For high school Chapters and undergraduate students, the Faculty Sponsor must be in attendance at every meeting that is held in the evening. In the event that the appointed sponsor is not available, another faculty member may chaperon the meeting. If both are not available, a local area professional, previously investigated and approved by the school, can be assigned to supervise evening meetings.
                                </li>
                            </ol>
                        </li>
                    </ol>
                </li>                
            </ol>
            <h4 id="article6">Article VI: Meetings</h4>
            <ol>
                <li>
                    The Chapter shall hold meetings once every month and should take place in an open and accessible to all members of the Chapter.
                </li>
                <li>
                    An annual election meeting should be held not later than the ninth week of the third trimester. Similarly during this meeting, the President will report his/her accomplishments while the Treasurer will present the financial reports.
                </li>
                <li>
                    Notices of all meetings shall be distributed to all members at least one week prior to any meeting.
                </li>
                <li>
                    A special meeting may be called by the President with the approval of the Faculty Sponsor if deemed necessary.
                </li>
            </ol>
            <h4 id="article7">Article VII: Disbursements and Dues</h4>
            <ol>
                <li>
                    Disbursements from the Treasury for Chapter expenditures shall be made by any active Chapter officer and shall be included in the minutes of its meetings.
                </li>
                <li>
                    Dues shall be fixed annually.
                </li>
            </ol>
            <h4 id="article8">Article VIII: Amendment and Voting Procedures</h4>
            <ol>
                <li>
                    All proposed changes to these Chapter Bylaws shall be approved by ACM Headquarters – Chapters Department before being presented to the Chapter membership for a vote.
                </li>
                <li>
                    No official business of the Chapter shall be conducted unless a quorum is present. A quorum of the Chapter shall be defined as a majority of the voting membership of the Chapter.
                </li>
                <li>
                    Officers will be elected by plurality of votes cast.
                </li>
            </ol>
            <h4 id="article9">Article IX: Code of Conduct</h4>
            <ol>
                <li>
                    Harassment or hostile behavior is unwelcome, including speech that intimidates, creates discomfort, or interferes with a person’s participation or opportunity for participation, in a Chapter meeting or Chapter event. Harassment in any form, including but not limited to harassment based on alienage or citizenship, age, color, creed, disability, marital status, military status, national origin, pregnancy, childbirth and pregnancy-related medical conditions, race, religion, sex, gender, veteran status, sexual orientation or any other status protected by laws in which the Chapter meeting or Chapter event is being held, will not be tolerated. Harassment includes the use of abusive or degrading language, intimidation, stalking, harassing photography or recording, inappropriate physical contact, sexual imagery and unwelcome sexual attention. A response that the participant was “just joking”, or “teasing”, or being “playful”, will not be accepted.
                </li>
                <li>
                    Anyone witnessing or subject to unacceptable behavior should notify a Chapter officer or ACM Headquarters.
                </li>
                <li>
                    Individuals violating these standards may be sanctioned or excluded from further participation at the discretion of the Chapter officers or responsible committee members.
                </li>
            </ol>
            <h4 id="article10">Article X: Dissolution of the Chapter</h4>
            <ol>
                <li>
                    Dissolution of this Chapter by consent of the members shall consist of unanimous agreement of all its officers together with a majority vote at a meeting which has been publicized in advance to all members of all Chapter for the purpose of taking this vote.
                </li>
                <li>
                    Should this Chapter be dissolved, its assets and liabilities shall be transferred to ACM and shall be supervised by the ACM Finance Director. Funds given to the Chapter from the University shall be returned to the University.
                </li>
            </ol>
    </div>



<style>

    
        #navrulesbylaws{
            color:#91C2D3;
        }
    </style>
@endsection

@section('sidebar')
    <ul class="nav flex-column my-5" id="">
        <li class="nav-item"><a class="nav-link" href="#article1"> Article 1: Name</a></li>
        <li class="nav-item"><a class="nav-link" href="#article2"> Article 2: Purpose</a></li>
        <li class="nav-item"><a class="nav-link" href="#article3"> Article 3: Memberships</a></li>
        <li class="nav-item"><a class="nav-link" href="#article4"> Article 4: Officers</a></li>
        <li class="nav-item"><a class="nav-link" href="#article5"> Article 5: Duties of Officers, Committees and Faculty Sponsor</a></li>
        <li class="nav-item"><a class="nav-link" href="#article6"> Article 6: Meetings</a></li>
        <li class="nav-item"><a class="nav-link" href="#article7"> Article 7: Disbursements and Dues</a></li>
        <li class="nav-item"><a class="nav-link" href="#article8"> Article 8: Amendment and Voting Procedures</a></li>
        <li class="nav-item"><a class="nav-link" href="#article9"> Article 9: Code of Conduct</a></li>
        <li class="nav-item"><a class="nav-link" href="#article10"> Article 10: Dissolution of the Chapter</a></li>
    </ul>

    
@endsection