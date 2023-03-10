
import { EllipsisVerticalIcon } from '@heroicons/react/20/solid'

const projects = [
  { name: 'Orders (30 Days)', initials: 'GA', href: '#', members: 16, bgColor: 'bg-pink-600' },
  { name: 'SALES VOLUME ( 30 DAYS )', initials: 'CD', href: '#', members: 12, bgColor: 'bg-purple-600' },
  { name: 'NUMBER OF ITEMS', initials: 'T', href: '#', members: 16, bgColor: 'bg-yellow-500' },
  { name: 'VIEWS', initials: 'RC', href: '#', members: 8, bgColor: 'bg-green-500' },
]

function classNames(...classes) {
  return classes.filter(Boolean).join(' ')
}

export default function Statastics() {
  return (
    <div >
      <h2 className="text-sm font-medium text-gray-500">Pinned Projects</h2>
      <ul role="list" className="mt-3 grid grid-cols-1 gap-5 sm:grid-cols-2 sm:gap-6 lg:grid-cols-4">
        {projects.map((project) => (
          <li key={project.name} className="col-span-1 flex rounded-md shadow-sm">
            <div
              className={classNames(
                project.bgColor,
                'flex w-16 flex-shrink-0 items-center justify-center rounded-l-md text-sm font-medium text-white'
              )}
            >
              {project.initials}
            </div>
            <div className="flex flex-1 items-center justify-between truncate rounded-r-md border-t border-r border-b border-gray-200 bg-white">
              <div className="flex-1 truncate px-4 py-2 text-sm">
                <a href={project.href} className="font-medium text-gray-900 hover:text-gray-600">
                  {project.name}
                </a>
                <p className="text-gray-500">{project.members} Members</p>
              </div>
            </div>
          </li>
        ))}
      </ul>
    </div>
  )
}