const getter = (id) => {
    return document.getElementById(id);
}

var examiner = getter('examiner');
var student = getter('student');
var container = getter('container');

const opener = () => {
    container.style.backgroundColor = '#1a1a1a';
}

const closer = () => {
    container.style.backgroundColor = 'white';
}

student.addEventListener('mouseover', opener);
student.addEventListener('mouseout', closer);
examiner.addEventListener('mouseover', opener);
examiner.addEventListener('mouseout', closer);


