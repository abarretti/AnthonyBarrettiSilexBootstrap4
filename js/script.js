function openClose(element) {
  const image = element + 'Image';
  const content = element + 'Content';

  if (document.getElementById(image).alt == 'minus') {
    const newImage = document.getElementById(image).src.replace('minus', 'plus');
    document.getElementById(image).src = newImage;
    document.getElementById(image).alt = 'plus';
    document.getElementById(content).style.display = 'none';
  } else {
    const newImage = document.getElementById(image).src.replace('plus', 'minus');
    document.getElementById(image).src = newImage;
    document.getElementById(image).alt = 'minus';
    document.getElementById(content).style.display = 'inline-block';
  }
}
