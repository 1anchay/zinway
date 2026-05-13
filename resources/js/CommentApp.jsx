import React, { useState, useEffect } from 'react';
import { createRoot } from 'react-dom/client';
import { ChatBubbleLeftRightIcon, UserIcon } from '@heroicons/react/24/outline';
import axios from 'axios';

// ⬇ Основной компонент
const CommentApp = () => {
  const [comments, setComments] = useState([]);
  const [form, setForm] = useState({ name: '', message: '' });

  useEffect(() => {
    axios.get('/api/comments').then(res => setComments(res.data));
  }, []);

  const handleSubmit = async (e) => {
    e.preventDefault();
    if (!form.name || !form.message) return;
    await axios.post('/api/comments', form);
    setForm({ name: '', message: '' });
    const res = await axios.get('/api/comments');
    setComments(res.data);
  };

  return (
    <div className="bg-white shadow-xl rounded-xl p-6 space-y-6">
      <h1 className="text-2xl font-bold text-indigo-600 flex items-center gap-2">
        <ChatBubbleLeftRightIcon className="w-6 h-6" />
        Оставь комментарий об IT-курсе
      </h1>

      <form onSubmit={handleSubmit} className="space-y-4">
        <input
          type="text"
          placeholder="Твое имя"
          className="w-full border rounded px-4 py-2"
          value={form.name}
          onChange={(e) => setForm({ ...form, name: e.target.value })}
        />
        <textarea
          placeholder="Комментарий..."
          className="w-full border rounded px-4 py-2"
          value={form.message}
          onChange={(e) => setForm({ ...form, message: e.target.value })}
        ></textarea>
        <button
          type="submit"
          className="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded"
        >
          Отправить
        </button>
      </form>

      <div className="divide-y">
        {comments.map((comment) => (
          <div key={comment.id} className="py-4">
            <div className="flex items-center mb-1">
              <UserIcon className="w-5 h-5 text-gray-500 mr-2" />
              <span className="font-semibold">{comment.name}</span>
              <span className="text-sm text-gray-400 ml-auto">
                {new Date(comment.created_at).toLocaleDateString()}
              </span>
            </div>
            <p className="text-gray-700 ml-7">{comment.message}</p>
          </div>
        ))}
      </div>
    </div>
  );
};

// ⬇ Монтируем в DOM
if (document.getElementById('app')) {
  createRoot(document.getElementById('app')).render(<CommentApp />);
}
