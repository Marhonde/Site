function downloadFile(filename) {
    const link = document.createElement('a');
    link.href = filename;
    link.download = filename.split('/').pop();
    link.click();
}