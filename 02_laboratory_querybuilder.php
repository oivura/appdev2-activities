<!-- 1. Retrieve all students. -->
DB::table('students')->get();

<!-- 2. Retrieve students in a specific grade. -->
DB::table('students')->where('grade', '10')->get();

<!-- 3. Retrieve students with a specific age range. -->
DB::table('students')->whereBetween('age', [15, 28])->get();

<!-- 4. Retrieve students from a specific city. -->
DB::table('students')->where('city', 'Manila')->get();

<!-- 5. Retrieve students sorted by their age in descending order. -->
DB::table('students')->orderBy('age', 'desc')->get();

<!-- 6. Retrieve students with their corresponding teacher. -->
DB::table('students')
->join('teachers', 'students.id', '=', 'teachers.id')
->select('students.*', 'teachers.*')->get();

<!-- 7. Retrieve teachers along with the number of students they teach. -->
DB::table('teachers')
->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
->select('teachers.*', 'COUNT(students.id) as student_count')
->groupBy('teachers.id')->get();

<!-- 8. Retrieve students with their corresponding subjects. -->
DB::table('students')
->join('subjects', 'students.subject_id', '=', 'subjects.id')
->select('students.*', 'subjects.name as subject_name')->get();

<!-- 9. Retrieve students along with their average scores. -->
DB::table('students')
->leftJoin('scores', 'students.id', '=', 'scores.student_id')
->select('students.*', 'avg(scores.score) as average_score')
->groupBy('students.id')->get();

<!-- 10. Retrieve top 5 teachers with the highest number of students. -->
DB::table('teachers')
->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
->select('teachers.*', 'count(students.id) as student_count')
->groupBy('teachers.id')
->orderBy('student_count', 'desc')
->limit(5)->get();