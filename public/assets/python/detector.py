{
 "cells": [
  {
   "cell_type": "code",
   "execution_count": 77,
   "id": "255c77fe",
   "metadata": {},
   "outputs": [],
   "source": [
    "from sklearn.datasets import load_breast_cancer\n",
    "import pandas as pd \n",
    "import numpy as np \n",
    "import re,csv\n",
    "\n",
    "\n",
    "\n",
    "dt1 = pd.read_csv(\"./b/2-class-sentiment-arabizi-ds.csv\")\n",
    "dt2 = pd.read_csv(\"./b/3-class-sentiment-arabizi-ds.csv\")\n",
    "dt3 = pd.read_csv(\"./b/algbad.txt\")\n",
    "dt6 = pd.read_csv(\"./b/araalgbad.txt\")\n",
    "dt4 = pd.read_csv(\"/b/list\",header=None)\n",
    "dt5 = pd.read_csv(\"./b/unbalanced-sentiment-arabizi-ds.csv\")\n"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 78,
   "id": "74d07abf",
   "metadata": {},
   "outputs": [],
   "source": [
    "pattern = re.compile(\"[^\\w\\s]+|[\\d]+|[_]+\", flags=re.UNICODE)\n",
    "pattern = '|'.join(dt3['bad'].str.strip().str.join(\"\").str.replace(r\"h\",\"(h|7|8)\", flags=re.IGNORECASE)\n",
    "                                                        .str\n",
    "                                                        .replace(r\"a\",\"(a|9|2|3|@)\", flags=re.IGNORECASE)\n",
    "                                                        .str\n",
    "                                                        .replace(r\"i\",\"(i|1)\", flags=re.IGNORECASE) \n",
    "                                                         .str\n",
    "                                                        .replace(r\"l\",\"(l|1)\", flags=re.IGNORECASE) \n",
    "                                                        .str\n",
    "                                                        .replace(r\"o\",\"(o|0|@)\", flags=re.IGNORECASE)\n",
    "                                                        .str\n",
    "                                                        .replace(r\"kh\",\"(kh|5)\", flags=re.IGNORECASE)                \n",
    "                                                        .str.strip())+'|'.join(dt3['bad'].str.replace(pattern, '').str\n",
    "                                                        .replace(r\"h\",\"(h|7|8)\", flags=re.IGNORECASE)\n",
    "                                                        .str\n",
    "                                                        .replace(r\"a\",\"(a|9|2|3)\", flags=re.IGNORECASE)\n",
    "                                                        .str\n",
    "                                                        .replace(r\"kh\",\"(kh|5)\", flags=re.IGNORECASE) \n",
    "                                                         .str\n",
    "                                                         .replace(r\"k\",\"(k|9)\", flags=re.IGNORECASE)\n",
    "                                                        .str\n",
    "                                                        .replace(r\"i\",\"(i|1)\", flags=re.IGNORECASE) \n",
    "                                                         .str\n",
    "                                                        .replace(r\"l\",\"(l|1)\", flags=re.IGNORECASE) \n",
    "                                                        .str\n",
    "                                                        .replace(r\"o\",\"(o|0)\", flags=re.IGNORECASE) \n",
    "                                                        .str.strip())"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 79,
   "id": "60c94437",
   "metadata": {},
   "outputs": [],
   "source": [
    "pattern = re.sub(r'\\s+', r'\\\\s+', pattern)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 80,
   "id": "ef7c3343",
   "metadata": {},
   "outputs": [],
   "source": [
    "pattern2 = '|'.join(dt6['bad'].str.strip().str.join(\"\"))\n",
    "pattern2 = re.sub(r'\\s+', r'\\\\s+', pattern2)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 81,
   "id": "8532a55d",
   "metadata": {},
   "outputs": [],
   "source": [
    "ptr = pattern2+'|'+pattern"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 82,
   "id": "058772f7",
   "metadata": {},
   "outputs": [
    {
     "name": "stderr",
     "output_type": "stream",
     "text": [
      "C:\\Users\\Blue\\anaconda3\\lib\\site-packages\\sklearn\\base.py:318: UserWarning: Trying to unpickle estimator TfidfTransformer from version 1.0.2 when using version 1.2.2. This might lead to breaking code or invalid results. Use at your own risk. For more info please refer to:\n",
      "https://scikit-learn.org/stable/model_persistence.html#security-maintainability-limitations\n",
      "  warnings.warn(\n",
      "C:\\Users\\Blue\\anaconda3\\lib\\site-packages\\sklearn\\base.py:318: UserWarning: Trying to unpickle estimator TfidfVectorizer from version 1.0.2 when using version 1.2.2. This might lead to breaking code or invalid results. Use at your own risk. For more info please refer to:\n",
      "https://scikit-learn.org/stable/model_persistence.html#security-maintainability-limitations\n",
      "  warnings.warn(\n",
      "C:\\Users\\Blue\\anaconda3\\lib\\site-packages\\sklearn\\base.py:318: UserWarning: Trying to unpickle estimator SVC from version 1.0.2 when using version 1.2.2. This might lead to breaking code or invalid results. Use at your own risk. For more info please refer to:\n",
      "https://scikit-learn.org/stable/model_persistence.html#security-maintainability-limitations\n",
      "  warnings.warn(\n",
      "C:\\Users\\Blue\\anaconda3\\lib\\site-packages\\sklearn\\base.py:318: UserWarning: Trying to unpickle estimator Pipeline from version 1.0.2 when using version 1.2.2. This might lead to breaking code or invalid results. Use at your own risk. For more info please refer to:\n",
      "https://scikit-learn.org/stable/model_persistence.html#security-maintainability-limitations\n",
      "  warnings.warn(\n"
     ]
    }
   ],
   "source": [
    "import joblib\n",
    "m1 = joblib.load('Model_SVC_Medium.sav')\n",
    "m2  = joblib.load('last.sav')\n",
    "\n"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 90,
   "id": "9ca2f60a",
   "metadata": {},
   "outputs": [],
   "source": [
    "import numpy as np\n",
    "import regex as re\n",
    "from detoxify import Detoxify\n",
    "\n",
    "def identify(target):\n",
    "    result = [0,1]\n",
    "    if re.search(ptr, target):\n",
    "        return result[1]\n",
    "    pattern =  r\"[\\u0600-\\u06FF\\u0660-\\u0669\\u06F0-\\u06F9@#]+|[0-9]\"\n",
    "    ara = \" \".join(re.findall(pattern, target))\n",
    "    pattern  = r\"[a-zA-Z\\u0660-\\u0669\\u06F0-\\u06F9@#]+|é|à|0-9\"\n",
    "    eng = \" \".join(re.findall(pattern, target))\n",
    "    \n",
    "    \n",
    "    if ara and not ara.isdigit() :\n",
    "        target = [ara]\n",
    "        arra = m1.predict_proba(target)[0]\n",
    "        arrb = m2.predict_proba(target)[0]\n",
    "        a = np.argmax(m1.predict_proba(target))\n",
    "        b = np.argmax(m2.predict_proba(target))\n",
    "        if a == b :\n",
    "            return result[b]\n",
    "        ma = max(arra)\n",
    "        mb = max(arrb)\n",
    "        if ma > mb :\n",
    "            return result[np.where(arra == ma)[0][0]]   \n",
    "    \n",
    "        return result[np.where(arrb == mb)[0][0]]\n",
    "    \n",
    "    \n",
    "    if eng and not eng.isdigit() :\n",
    "        eng_or_frc = Detoxify(\"multilingual\").predict([eng])\n",
    "        for i in eng_or_frc.keys():\n",
    "            if eng_or_frc[i] > .7:\n",
    "                return result[1]\n",
    "    \n",
    "    return result[0]\n"
   ]
  }
 ],
 "metadata": {
  "kernelspec": {
   "display_name": "Python 3 (ipykernel)",
   "language": "python",
   "name": "python3"
  },
  "language_info": {
   "codemirror_mode": {
    "name": "ipython",
    "version": 3
   },
   "file_extension": ".py",
   "mimetype": "text/x-python",
   "name": "python",
   "nbconvert_exporter": "python",
   "pygments_lexer": "ipython3",
   "version": "3.9.12"
  }
 },
 "nbformat": 4,
 "nbformat_minor": 5
}
