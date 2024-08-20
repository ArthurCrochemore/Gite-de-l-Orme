ssh -vT git@github.com

echo "Add :"
git add book.json
echo "Commit :"
git commit -m "test"
echo "Push :"
if git push; then
    echo "Push successful"
else
    echo "Push failed. Check your SSH key and access rights."
fi
