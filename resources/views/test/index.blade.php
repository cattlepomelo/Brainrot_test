<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Brainrot Test</title>
    <style>
        /* Stils, lai visi attēli būtu vienāda izmēra */
        img {
            width: 300px;    /* Platums */
            height: 300px;   /* Augstums */
            object-fit: cover; /* Attēla proporcijas tiek saglabātas, bet attēls tiek apgriezts, ja nepieciešams */
            margin-bottom: 10px; /* Attēlu atstarpe no apakšas */
            border-radius: 8px;  /* Noapaļoti stūri */
        }

        .question-container {
            margin-bottom: 20px;
        }

        .question-container p {
            font-size: 18px;
            font-weight: bold;
        }

        .answer-options {
            display: flex;
            justify-content: space-between;
        }

        .answer-options label {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Brainrot Test</h1>
    <form action="{{ url('/test/submit') }}" method="POST">
        @csrf
        @foreach ($questions as $question)
            <div>
                <p>{{ $question->question_text }}</p>
                <div>
                    <input type="radio" name="answers[{{ $question->id }}]" value="1">
                    <img src="{{ $question->image1 }}" alt="Option 1">
                </div>
                <div>
                    <input type="radio" name="answers[{{ $question->id }}]" value="2">
                    <img src="{{ $question->image2 }}" alt="Option 2">
                </div>
                <div>
                    <input type="radio" name="answers[{{ $question->id }}]" value="3">
                    <img src="{{ $question->image3 }}" alt="Option 3">
                </div>
                <div>
                    <input type="radio" name="answers[{{ $question->id }}]" value="4">
                    <img src="{{ $question->image4 }}" alt="Option 4">
                </div>
            </div>
        @endforeach
        <button type="submit">Submit</button>
    </form>
</body>
</html>
